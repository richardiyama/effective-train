<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColumnsTwo extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'content_one',
    'content_two',
    ];


    public function servicedetails(){
        return $this->hasOne(ServiceDetails::class, 'two_columns_id', 'id');
    }

    public function standardservice(){
        return $this->hasOne(StandardService::class, 'two_columns_id','id');
    }
    public function abouts(){
        return $this->hasOne(About::class, 'two_columns_id', 'id');
    }
}
