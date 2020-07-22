<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceArea extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'title',
    'content',
    'content_title',

    ];
}
