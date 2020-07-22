<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogArea extends Model
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

public function posts(){
    return $this->hasOne(Post::class, 'blog_area_id', 'id');
}
}
