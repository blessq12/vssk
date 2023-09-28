<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
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
        return response()->json([
            'status' => true,
            'message' => 'You message send successful'
        ]);
    }
}
