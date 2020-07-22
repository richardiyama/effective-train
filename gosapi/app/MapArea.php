<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MapArea extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'map_latitude',
    'map_longitude',
    ];

    public function contactus(){
        return $this->hasOne(ContactUs::class, 'map_id', 'id');
    }
}
