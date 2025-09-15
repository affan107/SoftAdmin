<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
    //
    protected $fillable = [
        "name",
        "email",
        "password",
        "logo",
        "cover_image",
        "industry",
        "country",
        "state",
        "city",
        "primary_address",
        "secondary_address",
        "telephone_primary",
        "telephone_secondary",
        "website",
        "instagram",
        "facebook",
        "whatsapp",
        "linkedin",
        "description",
        "no_of_employees",
        "status",
        'is_verified'
    ];


    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
