<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CounterArea extends Model
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
   ];


   public function homes(){
    return $this->hasOne(Home::class, 'counter_up_area_id', 'id');
}
}
