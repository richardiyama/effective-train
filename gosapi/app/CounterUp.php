<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CounterUp extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'counter_num',
    'title',
    ];
}
