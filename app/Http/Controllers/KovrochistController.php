<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KovrochistController extends Controller
{
    public const VIEW_FOLDER = 'kovrochist.';
    public function __construct()
    {
        // prepare data for view
    }

    public function index()
    {
        return 'kovrochist';
        return view(self::VIEW_FOLDER . 'index');
    }
}
