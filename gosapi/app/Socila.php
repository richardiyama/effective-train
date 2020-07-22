<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socila extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'social_tag',
    'social_url',
    'team_id',

    ];

   
    public function footer(){
        return $this->hasOne(Footer::class, 'social_id', 'id');
    }

    public function team(){
        return $this->belongsTo(Team::class, 'team_id','id');
    }
}
