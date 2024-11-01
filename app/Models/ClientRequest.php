<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'phone',
        'email',
        'message',
        'type',
        'delivery_address',
    ];

    public function data()
    {
        return $this->hasOne(ClientRequestData::class);
    }
}
