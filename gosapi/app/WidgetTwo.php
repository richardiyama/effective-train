<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WidgetTwo extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'title',
    'link_title_one',
    'link_title_two',
    'link_title_three',

        ];


        public function footer(){
            return $this->hasOne(Footer::class, 'widget_two_id', 'id');
          }
}
