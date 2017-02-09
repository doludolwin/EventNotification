<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Notifications\DatabaseNotification;

class NotificationController extends Controller
{
     public function readMark(User $user, DatabaseNotification $notify)
    {
        $notify->markAsRead();
		return back();
        
    }
}
