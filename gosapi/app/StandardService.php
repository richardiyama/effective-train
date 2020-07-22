<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StandardService extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'services_image',
    'title',
    'description',
    'services_urls',
    'home_id',
    'service_done_id',
    'two_columns_id',

    ];

    public function originalservice(){
        return $this->hasMany(OriginalService::class, 'standard_service_id', 'id');
    }

    public function columntwo(){
        return $this->belongsTo(ColumnsTwo::class, 'two_columns_id','id');
    }
    
    public function homess(){
        return $this->belongsTo(Home::class, 'home_id','id');
    }

    public function servicedone(){
        return $this->belongsTo(ServiceDone::class, 'service_done_id','id');
    }
    
}
