<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDone extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
    'two_columns_id',
    'service_area_id',
    'breadcrump_id',

      ];

      public function standardservice(){
        return $this->hasOne(StandardService::class, 'service_done_id','id');
    }
      public function columntwo(){
        return $this->belongsTo(ColumnsTwo::class, 'two_columns_id','id');
    }

    public function breadcrump(){
      return $this->belongsTo(BreadCrump::class, 'breadcrump_id','id');
  }

  public function servicearea(){
    return $this->belongsTo(ServiceArea::class, 'service_area_id','id');
}
}
