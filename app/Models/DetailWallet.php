<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailWallet extends Model
{
    protected $fillable = ['wallet_id', 'amount', 'type'];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
