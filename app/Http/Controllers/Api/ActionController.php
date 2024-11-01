<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// Requests
use App\Http\Requests\ClientRequest;
use App\Http\Requests\ClientRequestData;
use Illuminate\Http\Request;
// Services
use App\Facades\TelegramNotification;
use App\Facades\ClientRequestHandler;
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

    public function createClientRequest(
        Request $request,
        $site_id,
        // ClientRequest $request,
        // ClientRequestData $requestData
    ) {
        /**
         * Check if company exists
         * validate requests
         * create client request
         * create client request data
         * 
         * return response
         */
        $clientInfo = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'company_id' => 'required|integer|exists:companies,id',
            'type' => 'required|string|max:255|in:carpet,sofa,mattress',
            'message' => 'nullable|string|max:255',
            'request_data' => 'nullable|json',
        ]);

        return response()->json([
            'request' => $clientInfo,
        ]);



        if (!ClientRequestHandler::createClientRequest($validatedRequest)) return response()->json(['message' => 'Не удалось сохранить заявку'], 400);
        if (!ClientRequestHandler::createClientRequestData($validatedRequestData)) return response()->json(['message' => 'Не удалось сохранить данные заявки'], 400);

        return response()->json([
            'message' => 'Заявка успешно создана',
            'created_request' => ClientRequestHandler::createClientRequest($request->id),
            'created_request_data' => ClientRequestHandler::createClientRequestData($request->id),
        ], 200);
    }
    public function getClientRequest($id)
    {
        $clientRequest = RequestModel::find($id)->first();

        return response()->json([
            'request' => $clientRequest,
        ]);
    }
    public function sendOrderData(Request $request)
    {
        try {
            $response = TelegramNotification::sendMessage($request->message);
        } catch (\Exception $e) {
            $error = $e->getMessage();
        }

        return response()->json([
            'status' => $response,
            'error' => $error ?? null,
        ]);
    }
}
