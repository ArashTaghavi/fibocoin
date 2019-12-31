<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Not;

class NotificationController extends Controller
{
    public function index()
    {
        return Notification::with('notificationDetail')
            ->where('user_id', Auth::id())
            ->where('is_read', 0)
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function full_list()
    {
        return Notification::with('notificationDetail')
            ->where('user_id', Auth::id())
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function read_all()
    {
        Notification::where('user_id', Auth::id())->update(['is_read' => 1]);
    }
}
