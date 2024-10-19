<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// Requests
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
// Services
use App\Facades\TelegramNotification;
// Models
use App\Models\ClientRequest as RequestModel;

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

    public function createClientRequest(ClientRequest $request)
    {
        \Log::info('Session Data:', session()->all());
        $validated = $request->validated();

        // Check for validation errors
        $clientRequest = RequestModel::create($validated);

        return response()->json([
            'message' => 'Request created successfully',
            'data' => $clientRequest,
        ]);
    }
    public function getClientRequest($id)
    {
        $clientRequest = RequestModel::find($id)->first();

        return response()->json([
            'request' => $clientRequest,
        ]);
    }
}
