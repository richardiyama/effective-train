<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseFile extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'course_file_image'
    ];
}
