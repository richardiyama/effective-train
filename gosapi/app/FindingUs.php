<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FindingUs extends Model
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
    'service_booking_url',
    ];


    public function servicedetails(){
        return $this->hasOne(ServiceDetails::class, 'finding_us_id', 'id');
    }

    public function abouts(){
        return $this->hasOne(About::class, 'finding_us_id', 'id');
    }
}
