<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Company;

class CleanKirovController extends Controller
{
    public const VIEW_FOLDER = 'cleankirov.';
    public const PROD_DOMAIN = 'clean-kirov.ru';

    public function __construct()
    {
        //
        View::share(
            'company',
            Company::where(
                'domain',
                env('APP_ENV') == 'develop' ? self::PROD_DOMAIN : request()->getHost()
            )->first()
        );
    }

    public function index()
    {
        return view(self::VIEW_FOLDER . 'index');
    }
}
