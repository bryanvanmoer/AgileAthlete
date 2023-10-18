<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $fillable = [
        'email',
        'password',
        'firstname',
        'lastname',
        'birthdate',
        'size',
        'weight',
        'description',
        'nationality',
        'good_hand',
        'location',
        'phone',
        'password_changed_at',
        'gender',
        'admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'birthdate' => 'timestamp',
        'password_changed_at' => 'timestamp',
        'password' => 'hashed',
    ];
}
