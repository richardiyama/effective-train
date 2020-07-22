<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OriginalService extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'standard_service_id',
    'title',
    'description',
    
    ];

    public function standardservice(){
        return $this->belongsTo(StandardService::class, 'standard_service_id','id');
    }


    public function servicedetail(){
        return $this->hasOne(ServiceDetails::class, 'orignalservice_id','id');
    }
}
