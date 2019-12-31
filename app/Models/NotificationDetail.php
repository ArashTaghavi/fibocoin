<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationDetail extends Model
{
    const CARD_CONFIRM = 1;
    const CARD_REJECT = 2;
    const DOCUMENT_CONFIRM = 3;
    const DOCUMENT_REJECT = 4;

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
