<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPlayer extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'birth_date',
        'size',
        'weight',
        'description',
        'nationality',
        'good_hand',
        'location'
    ];
}
