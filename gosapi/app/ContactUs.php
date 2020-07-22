<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'contact_top_area_id',
    'map_id',
    'breadcrumbarea_id',
    ];

    
    public function contacttoparea(){
        return $this->belongsTo(ContactTopArea::class, 'contact_top_area_id','id');
    }
    
    public function breadcrumbarea(){
        return $this->belongsTo(BreadCrumbArea::class, 'breadcrumbarea_id','id');
    }

    public function maparea(){
        return $this->belongsTo(MapArea::class, 'map_id','id');
    }
   
    
}
