<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
    'social_id',
    'widget_id',
    'widget_two_id',
    'widget_three_id',
    ];

    
  
    public function socials(){
      return $this->belongsTo(Socila::class, 'social_id','id');
  }
  
  public function widgets(){
      return $this->belongsTo(Widget::class, 'widget_id','id');
  }
 
  public function widgettwo(){
    return $this->belongsTo(WidgetTwo::class, 'widget_two_id','id');
}

public function widgetthree(){
    return $this->belongsTo(WidgetThree::class, 'widget_three_id','id');
}



}
