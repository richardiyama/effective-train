<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutCounterArea extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'content',
    
            ];

            public function abouts(){
              return $this->hasOne(About::class, 'about_counter_area_id', 'id');
          }
}
