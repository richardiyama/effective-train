<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
        'post_image',
        'content_one',
        'blog_image',
        'content_two',
        'content_three',
        'title_two',
        'content_four',
        'blog_image_two',
        'title_three',
        'content_five',
        'title_four',
        'title_five',
        'list_one',
        'list_two',
        'list_three',
        'list_four',
        'list_five',
        'title_five',
        'list_six',
        'list_seven',
        'list_eight',
        'list_nine',
        'content_six',
        'blog_video',
        'blog_image_three',
        'content_seven',
        'home_id',
        'blog_area_id',
        'breadcrumbarea_id',
    ];

    

    public function breadcrumbarea(){
        return $this->belongsTo(BreadCrumbArea::class, 'breadcrumbarea_id','id');
    }

    
    public function blogarea(){
        return $this->belongsTo(BlogArea::class, 'blog_area_id','id');
    }

    public function homess(){
        return $this->belongsTo(Home::class, 'home_id','id');
    }

}
