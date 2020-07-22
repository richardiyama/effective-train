<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NameItem extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'title_one',
    'title_two',
    'title_three',
    'title_four',
    'title_five',
    ];

    public function abouttwo(){
        return $this->hasOne(AboutTwo::class, 'name_item_one_id', 'id');
    }
}
