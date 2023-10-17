<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserClub extends Model
{
    protected $fillable = [
        'name',
        'description',
        'club_creation_date',
        'phone_number',
        'url_website',
        'sport',
        'contact_email',
        'country',
        'city',
        'street',
        'street_number',
        'postal_code'
    ];
}
