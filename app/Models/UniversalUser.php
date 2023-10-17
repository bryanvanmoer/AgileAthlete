<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversalUser extends Model
{
    protected $fillable = [
        'email',
        'password',
        'admin',
        'user_player_id',
        'club_user_id',
    ];
}
