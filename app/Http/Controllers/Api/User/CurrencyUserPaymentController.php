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
            ->where('user_id', Auth::id())
            ->where('id', $id)
            ->first();
    }
}
