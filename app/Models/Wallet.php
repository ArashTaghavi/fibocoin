<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{

    protected $fillable = ['amount'];


    public function details()
    {
        return $this->hasMany(DetailWallet::class);
    }

}
