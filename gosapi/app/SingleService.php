<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleService extends Model
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

    ];

    public function homes(){
        return $this->hasOne(Home::class, 'single_service_id', 'id');
    }
}
