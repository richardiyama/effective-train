<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accordion extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'content_one',
    'content_two',
    'title_one',
    'title_two',
    'title_three',
    'title_four',
    'content_three',
    'content_four',
    ];
}
