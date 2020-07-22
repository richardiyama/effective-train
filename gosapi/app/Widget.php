<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'admin_email',
    'email',

    ];

    public function footer(){
        return $this->hasOne(Footer::class, 'widget_id', 'id');
    }
}
