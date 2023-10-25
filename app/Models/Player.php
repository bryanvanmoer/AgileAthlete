<?php

namespace App\Models;

use App\Enum\Gender;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'firstname',
        'lastname',
        'birthdate ',
        'size',
        'weight',
        'description',
        'nationality',
        'good_hand',
        'location',
        'phone',
        'gender',
        'user_id',
    ];

    protected $casts = [
        'birthdate' => 'timestamp',
        'gender' => Gender::class,
    ];
}
