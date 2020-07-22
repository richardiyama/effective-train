<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BreadCrump extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'title',
    ];

    public function abouts(){
        return $this->hasOne(About::class, 'breadcrump_id', 'id');
    }

    public function servicedone(){
        return $this->hasMany(ServiceDone::class, 'breadcrump_id', 'id');
    }
}
