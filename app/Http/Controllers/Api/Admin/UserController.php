<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\BuyOrder;
use App\Models\Card;
use App\Models\CurrencyUser;
use App\Models\CurrencyUserPayment;
use App\Models\Document;
use App\Models\Notification;
use App\Models\NotificationDetail;
use App\Models\PaymentRequest;
use App\Models\SellOrder;
use App\Models\Wallet;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function foo\func;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('wallet')->where('is_admin', '!=', 1)->orderBy('created_at','DESC')->get();

        return $users;
    }

    public function block($id)
    {
        $user = User::find($id);
        $user->is_block = !$user->is_block;
        $user->save();
        return ['message' => __('messages.save_success')];
    }

    public function detail($id)
    {
        return User::find($id);
    }

    public function buy_orders($id)
    {
        return BuyOrder::with('currency')->where('user_id', $id)->get();
    }

    public function sell_orders($id)
    {
        return CurrencyUser::with('currencyUserPayments')
            ->where('user_id', $id)
            ->first();
    }


    public function payment_requests($id)
    {

        return PaymentRequest::where('user_id', $id)->get();
    }

    public function search($search_value)
    {
        $users = User::where('is_admin', '!=', 1)->where(function ($q) use ($search_value) {
            $q->where('first_name', 'like', "%{$search_value}%")
                ->orWhere('first_name', 'like', "%{$search_value}%")
                ->orWhere('last_name', 'like', "%{$search_value}%")
                ->orWhere('email', 'like', "%{$search_value}%")
                ->orWhere('mobile', 'like', "%{$search_value}%");
        })->get();

        return $users;
    }

    public function cards($id)
    {
        return Card::where('user_id', $id)->get();
    }

    public function card_search($id, $approved)
    {
        return Card::where('user_id', $id)->where('approved', $approved)->get();
    }

    public function card_approved($id, $confirmation)
    {
        Card::where('id', $id)->update(['approved' => $confirmation]);
        $user_id = Card::where('id', $id)->first()->user_id;

        $notify = new Notification();
        $notify->notification_detail_id = $confirmation == 1 ? NotificationDetail::CARD_CONFIRM : NotificationDetail::CARD_REJECT;
        $notify->user_id = $user_id;
        $notify->save();
    }

    public function buy_order_search($id, $status)
    {
        return BuyOrder::with('currency')->where('user_id', $id)->where('status', $status)->get();
    }

    public function sell_order_search($id, $status)
    {
        return SellOrder::with('currency')->where('user_id', $id)->where('status', $status)->get();
    }

    public function payment_request_search($id, $status)
    {
        return PaymentRequest::where('user_id', $id)->where('status', $status)->get();
    }

    public function buy_order_status($id, $status)
    {
        BuyOrder::where('id', $id)->where('status', '!=', BuyOrder::REJECT)->update(['status' => $status]);
    }

    public function sell_order_status(Request $request, $id)
    {
        $cup = CurrencyUserPayment::where('id', $id)->where('status', '!=', CurrencyUserPayment::REJECT)->first();
        if (!empty($request->description)) {
            $cup->description = $request->description;
        }
        $cup->status = $request->status;
        $cup->save();
        CurrencyUserPayment::where('id', $id)->update(['updated_at' => Carbon::now()]);
    }

    public function payment_request_status(Request $request, $id)
    {
        $payment_request = PaymentRequest::where('id', $id)->where('status', '!=', PaymentRequest::REJECT)->first();
        if (!empty($request->description)) {
            $payment_request->description = $request->description;
        }
        $payment_request->status = $request->status;
        $payment_request->reply_at = date(Carbon::now());
        $payment_request->save();
        PaymentRequest::where('id', $id)->update(['reply_at' => Carbon::now()]);
    }

    public function documents($id)
    {
        return Document::where('user_id', $id)->get();

    }

    public function document_approved($id, $confirmation)
    {
        Document::where('id', $id)->where('approved', '!=', Document::REJECT)->update(['approved' => $confirmation]);

        $user_id = Document::where('id', $id)->first()->user_id;

        $notify = new Notification();
        $notify->notification_detail_id = $confirmation == 1 ? NotificationDetail::DOCUMENT_CONFIRM : NotificationDetail::DOCUMENT_REJECT;
        $notify->user_id = $user_id;
        $notify->save();
    }

    public function store(Request $request)
    {
        $this->handleValidate($request);
        $user = new User();

        $user->mobile = $request->mobile;
        $user->password = bcrypt($request->password);
        $user->is_admin_define = 1;
        $user->save();

        return ['message' => __('messages.save_success')];
    }


    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'mobile' => 'required|unique:users',
            'password' => 'required'
        ]);

        $validator->after(function ($validator) use ($request) {
            $uppercase = preg_match('@[A-Z]@', $request->password);
            $lowercase = preg_match('@[a-z]@', $request->password);
            $number = preg_match('@[0-9]@', $request->password);

            if (!$uppercase || !$lowercase || !$number || strlen($request->password) < 8) {
                $validator->errors()->add('password', 'پسورد باید شامل حروف کوچک، بزرگ و عدد باشد.');
            }
        });
        if ($validator->fails()) {
            abort(422, $validator->errors()->first());
        }

        return $validator->getData();
    }

    public function verify_phone($id)
    {
        $user = User::find($id);
        $user->verify_phone = 1;
        $user->save();

        $notify = new Notification();
        $notify->notification_detail_id = NotificationDetail::PHONE_CONFIRM;
        $notify->user_id = $user->id;
        $notify->save();
        return ['message' => __('messages.save_success')];
    }

    public function wallet(Request $request, $id)
    {
        $wallet = Wallet::where('user_id', $id)->first();

        if ($wallet == null || empty($wallet)) {
            Wallet::create(['user_id' => $id, 'amount' => $request->amount]);
        }
        else{
            Wallet::where('user_id',$id)->update(['amount'=>$wallet->amount + $request->amount]);
        }

        return ['message' => __('messages.save_success')];
    }
}
