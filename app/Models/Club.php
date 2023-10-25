<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'description',
        'creation_date',
        'phone',
        'url_website',
        'contact_email',
        'country',
        'city',
        'postal_code',
        'street',
        'street_number',
        'user_id',
        'sport_id',
    ];

    protected $casts = [
        'creation_date' => 'timestamp',
    ];
}
