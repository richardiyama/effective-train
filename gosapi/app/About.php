<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name',
    'inner_about_id',
    'three_columns_id',
    'finding_us_id',
    'title',
    'breadcrump_id',
    'two_columns_id',
    'about_one_id',
    'about_counter_area_id'

];


public function innerabout(){
    return $this->belongsTo(InnerAbout::class,'inner_about_id','id');
}

public function columnthree(){
    return $this->belongsTo(ColumnsThree::class, 'three_columns_id','id');
}

public function columntwo(){
    return $this->belongsTo(ColumnsTwo::class, 'two_columns_id','id');
}

public function aboutone(){
    return $this->belongsTo(AboutOne::class, 'about_one_id','id');
}

public function breadcrump(){
    return $this->belongsTo(BreadCrump::class, 'breadcrump_id','id');
}


public function findingus(){
    return $this->belongsTo(FindingUs::class, 'finding_us_id', 'id');
}

public function aboutcounterarea(){
    return $this->belongsTo(AboutCounterArea::class, 'about_counter_area_id', 'id');
}





}
