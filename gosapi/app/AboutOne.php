<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutOne extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',   
    'about_image',
    'title',
    'content',
    ];

    public function abouts(){
        return $this->hasOne(About::class, 'about_one_id', 'id');
    }

    public function homes(){
        return $this->hasOne(Home::class, 'about_one_id', 'id');
    }
}
