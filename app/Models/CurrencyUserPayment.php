<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class CurrencyUserPayment extends Model
{

    const REJECT = 0;
    const CONFIRM = 1;
    const WAITING = 2;
    const PAID = 3;

    public function currenciesUser()
    {
        return $this->belongsTo(CurrencyUser::class, 'currency_user_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
