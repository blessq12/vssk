<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Facades\TelegramNotification;

class ActionController extends Controller
{
    /**
     * If u need to send notification about something, use TelegramNotification facade
     * TelegramNotification::sendMessage($message) this method send message to telegram chat
     * $message is a string
     */


    /**
     * This method is used to get help for methods in this controller
     */
    public function help()
    {
        return 'This is help for ActionController';
    }

    public function createSlugOrder(Request $request)
    {
        return $request->all();
    }

    public function sendMessage(Request $request)
    {
        $message = $request->message;
        return TelegramNotification::sendMessage($message);
    }
}
