<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CleanKirovController extends Controller
{
    public const VIEW_FOLDER = 'clean_kirov.';
    public function __construct()
    {
        // prepare data for view
    }

    public function index()
    {
        return 'clean_kirov';
        return view(self::VIEW_FOLDER . 'index');
    }
}
