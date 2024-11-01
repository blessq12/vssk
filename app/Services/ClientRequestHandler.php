<?php

namespace App\Services;

use App\Models\Company;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\ClientRequestData;

class ClientRequestHandler
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param int $site_id
     * @return array|bool
     */
    public function checkCompanyExists($site_id)
    {
        $company_ids = Company::all()->pluck('id');
        if (!$company_ids->contains($site_id)) return false;
        return true;
    }

    public function createClientRequest($request)
    {
        return $request;
    }

    public function createClientRequestData($request)
    {
        return $request;
    }
}
