<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['domain', 'name', 'description', 'logo', 'phone', 'email', 'address'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $appends = ['socials'];

    public function socials()
    {
        return $this->hasMany(Social::class);
    }
}
