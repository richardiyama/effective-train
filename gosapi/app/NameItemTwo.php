<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NameItemTwo extends Model
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
        ];

        public function abouttwo(){
            return $this->hasOne(AboutTwo::class, 'name_item_two_id', 'id');
        }
}
