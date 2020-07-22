<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BreadCrumbArea extends Model
{ /**
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
            return $this->hasOne(Post::class, 'breadcrumbarea_id', 'id');
        }
        public function contactus(){
            return $this->hasOne(ContactUs::class, 'breadcrumbarea_id', 'id');
        }

        
        public function servicedetails(){
            return $this->hasOne(ServiceDetails::class, 'breadcrumbarea_id', 'id');
        }
     
}
