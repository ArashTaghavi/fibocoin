<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['body','receiver_id','sender_id'];

//Sender
    public function sUser()
    {
        return $this->belongsToMany(User::class, 'users', 'sender_id');
    }
//Receiver
    public function rUser()
    {
        return $this->belongsToMany(User::class, 'users', 'receiver_id');
    }
}
