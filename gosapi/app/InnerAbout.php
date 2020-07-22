<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InnerAbout extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'title',
    'description',
    ];

    public function abouts(){
        return $this->hasOne(About::class,'inner_about_id','id');
    }
    
}
