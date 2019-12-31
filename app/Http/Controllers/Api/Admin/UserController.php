<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\BuyOrder;
use App\Models\Card;
use App\Models\Document;
use App\Models\Notification;
use App\Models\NotificationDetail;
use App\Models\SellOrder;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', '!=', 1)->get();

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
        return SellOrder::with('currency')->where('user_id', $id)->get();
    }

    public function search($search_value)
    {
        $users = User::where('is_admin', '!=', 1)->where(function ($q) use ($search_value) {
            $q->where('first_name', 'like', "%{$search_value}%")
                ->orWhere('first_name', 'like', "%{$search_value}%")
                ->orWhere('last_name', 'like', "%{$search_value}%")
                ->orWhere('email', 'like', "%{$search_value}%");
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

    public function buy_order_status($id, $status)
    {
        BuyOrder::where('id', $id)->where('status', '!=', BuyOrder::REJECT)->update(['status' => $status]);
    }

    public function sell_order_status($id, $status)
    {
        SellOrder::where('id', $id)->where('status', '!=', BuyOrder::REJECT)->update(['status' => $status]);
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


}
