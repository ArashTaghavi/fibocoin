<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Finance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function foo\func;

class FinanceController extends Controller
{
    public function index()
    {
        return Finance::with('user')->whereHas('buy_order',function ($query){
                 $query->where('user_id',Auth::id());
        })->orderBy('created_at','DESC')->get();
    }


}
