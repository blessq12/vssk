<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    private $token = '1515495622:AAGel-avvlQrI9lcljcNYZBBsZSG9p3IXxg';
    private $receipt = '1512501866';
    public function sendMessage(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'phone' => 'required'
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }

        $telegramUrl = "https://api.telegram.org/bot$this->token/sendMessage?chat_id=$this->receipt&text=";
        $message = "Заявка с ВССК \n \n Имя: $request->name \n Телефон: $request->phone";

        if (file_get_contents($telegramUrl . $message)){
            return response()->json([
                'status' => true,
                'message' => 'You message send successful'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Failure on send message'
            ]);
        }

        
    }
}
