<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class CurrencyUser extends Model
{
    protected $fillable = ['currency_id', 'balance', 'min_sale', 'unit_price'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function currency()
    {

        return $this->belongsTo(Currency::class);
    }

    public function currencyUserPayments()
    {
        return $this->hasMany(CurrencyUserPayment::class);
    }
}
