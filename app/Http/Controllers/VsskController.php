<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VsskController extends Controller
{
    public const VIEW_FOLDER = 'vssk.';
    public function __construct()
    {
        // prepare data for view
    }

    public function index()
    {
        return 'vssk';
        return view(self::VIEW_FOLDER . 'index');
    }
}
