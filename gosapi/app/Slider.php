<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'text_position',
    'bg_Image',
    'category',
    'description',
    'button_text',
    'button_link',
    'home_id',
    ];

    public function homess(){
        return $this->belongsTo(Home::class, 'home_id','id');
    }
}
