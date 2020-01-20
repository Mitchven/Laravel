<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'fullname', 
        'username',
        'email'
    ];
    protected $hidden = [
        'password'
    ];
}
