<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\DetailWallet;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{

    public function transaction()
    {
        return DetailWallet::where('user_id', Auth::id())
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function balance()
    {
        return Wallet::where('user_id', Auth::id())->first();
    }


}
