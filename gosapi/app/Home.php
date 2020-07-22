<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'name',
    'single_service_id',
    'counter_up_area_id',
    'about_two_id',
    'title',
    'about_one_id',

     ];

     public function aboutone(){
      return $this->belongsTo(AboutOne::class, 'about_one_id','id');
  }

  public function singleservice(){
    return $this->belongsTo(SingleService::class, 'single_service_id','id');
}
   
     
  public function abouttwo(){
    return $this->belongsTo(AboutTwo::class, 'about_two_id','id');
}

public function counteruparea(){
  return $this->belongsTo(CounterArea::class, 'counter_up_area_id','id');
}
     public function slider(){
      return $this->hasMany(Slider::class, 'home_id', 'id');
  }
    
    
  public function standardservice(){
    return $this->hasMany(Standardservice::class, 'home_id','id');
}

  public function posts(){
    return $this->hasMany(Post::class, 'home_id', 'id');
}
}
