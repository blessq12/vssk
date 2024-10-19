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
        'furniture_type', // For furniture requests
        'furniture_size', // For furniture requests
        'count_of_items', // For furniture requests
        'count_of_seats', // For furniture requests
        'carpet_type', // For carpet requests
        'carpet_size', // For carpet requests
        'carpet_height', // For carpet requests
        'carpet_additional', // For carpet requests
        'mattress_size', // For mattress requests
        'mattress_height', // For mattress requests
        'mattress_additional', // For mattress requests
        'delivery_address',
    ];
}
