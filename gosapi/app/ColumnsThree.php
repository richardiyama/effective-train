<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColumnsThree extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'title_one',
   'content_one',
   'title_two',
 'content_two',
'title_three',
'content_three',
    ];

    public function abouts(){
        return $this->hasOne(About::class, 'three_columns_id', 'id');
    }
}
