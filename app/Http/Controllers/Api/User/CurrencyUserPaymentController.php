<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\CurrencyUser;
use App\Models\CurrencyUserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurrencyUserPaymentController extends Controller
{
    public function index($id)
    {
        return CurrencyUser::with('currencyUserPayments')
            ->where('id', $id)
            ->where('user_id', Auth::id())
            ->first();


    }

    public function list()
    {
        return CurrencyUser::with('currencyUserPayments')
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'DESC')
            ->first();
    }

    public function store(Request $request, $id)
    {
        $cup = new CurrencyUserPayment();

        $cup->currency_user_id = $id;
        $cup->user_id = Auth::id();
        $cup->amount = $request->amount;
        $cup->value = $request->value;
        $cup->save();



        return ['message' => __('messages.save_success')];

    }

}
