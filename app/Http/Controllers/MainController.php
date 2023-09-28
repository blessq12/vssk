<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        
        $company = Company::first();
        $company->WorkHour->days;

        return view('index',[
            'company' => $company
        ]);
    }
}
