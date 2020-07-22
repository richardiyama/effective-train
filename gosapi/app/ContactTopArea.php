<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactTopArea extends Model
{
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'phone_title',
    'phone_number_one',
    'phone_number_two',
    'email_title',
    'email_one',
    'email_two',
    ];

    public function contactus(){
        return $this->hasOne(ContactUs::class, 'contact_top_area_id', 'id');
    }
}
