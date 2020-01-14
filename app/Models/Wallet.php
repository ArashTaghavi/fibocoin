<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{

    protected $fillable = ['amount','user_id'];


    public function details()
    {
        return $this->hasMany(DetailWallet::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
