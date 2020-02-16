<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Finance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function foo\func;

class FinanceController extends Controller
{
    public function index()
    {
        return Finance::with('user')
            ->whereHas('currencyUser',function ($query){
                 $query->where('user_id',Auth::id());
        })
            ->with('currencyUser')
            ->orderBy('created_at','DESC')
            ->get();
    }


}
