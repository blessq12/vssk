<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Company;

class KovrochistController extends Controller
{
    public const VIEW_FOLDER = 'kovrochist.';
    public const PROD_DOMAIN = 'kovrochist43.ru';

    public function __construct()
    {
        // prepare data for view
        View::share(
            'company',
            Company::where(
                'domain',
                env('APP_ENV') == 'local' ? self::PROD_DOMAIN : request()->getHost()
            )->first()
        );
    }

    public function index()
    {
        return view(self::VIEW_FOLDER . 'index');
    }
}
