<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $fillable = ['buy_order_id','user_id','amount','value'];


    public function currencyUser()
    {
        return $this->belongsTo(CurrencyUser::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }



}
