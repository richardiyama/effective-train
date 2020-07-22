<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
     'title',
    'designation',
    'team_image',
    
    ];

    public function socials(){
        return $this->hasMany(Socila::class, 'team_id', 'id');
    }
    
}
