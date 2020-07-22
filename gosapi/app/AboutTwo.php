<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutTwo extends Model
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
    'name_item_one_id',
    'name_item_two_id',
    'header_title',
    'about_image',
    ];

    
    public function homes(){
        return $this->hasOne(Home::class, 'about_two_id', 'id');
      }

      public function nameitemone(){
        return $this->belongsTo(NameItem::class, 'name_item_one_id','id');
    }
    
    public function nameitemtwo(){
        return $this->belongsTo(NameItemTwo::class, 'name_item_two_id','id');
    }
}
