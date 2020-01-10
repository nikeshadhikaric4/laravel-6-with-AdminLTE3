<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PersonalContact extends Model
{
    //
    protected $fillable=[
        'name',
        'email',
        'image',
        'phone'

    ];
}
