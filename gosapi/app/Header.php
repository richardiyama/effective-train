<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'logo_image',

    ];

    
}
