<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    protected $fillable = [
        'country',
        'city',
        'postal_code',
        'street',
        'number'
    ];
}
