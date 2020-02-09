<?php

namespace App;

use App\EloquentHelpers\HasImage;
use App\Models\Card;
use App\Models\CurrencyUser;
use App\Models\Document;
use App\Models\PaymentRequest;
use App\Models\Ticket;
use App\Models\Wallet;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasImage;
    public $image_path = 'user/profile';
    const USER = 0;
    const ADMIN = 1;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'father_name', 'national_code', 'address', 'email', 'profile_image',
        'mobile', 'code', 'phone', 'sos_phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function documents()
    {

        return $this->hasMany(Document::class);
    }

    public function cards()
    {
        return $this->hasMany(Card::class);
    }

    public function currencies()
    {
        return $this->hasMany(CurrencyUser::class);
    }

    public function paymentRequests()
    {
        return $this->hasMany(PaymentRequest::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    public function sender()
    {
        return $this->hasOne(Ticket::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->hasOne(Ticket::class, 'receiver_id');
    }
}
