<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\PaymentRequest;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentRequestController extends Controller
{
    public function index()
    {
        return PaymentRequest::where('user_id', Auth::id())->get();
    }


    public function store(Request $request)
    {
        $this->handleValidate($request);
        $payment_request = new PaymentRequest();
        $payment_request->amount = $request->amount;
        $payment_request->user_id = Auth::id();
        $payment_request->save();

        return ['message' => __('messages.save_success')];
    }


    public function update(Request $request)
    {

    }


    public function handleValidate(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'amount' => 'required'
        ]);

        if ($validator->fails()) {
            abort(403, $validator->errors()->first());
        }

        $wallet = Wallet::where('id', Auth::id())->first();

        if ($wallet == null || empty($wallet) || $wallet->balance<$request->amount){
            abort(403, 'درخواست از میزان موجودی شما بیشتر است.');

        }

            return $validator->getData();
    }
}
