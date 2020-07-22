<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    'two_columns_id',
    'service_image',
    'content_one',
    'content_two',
    'title_one',
    'list_one',
    'list_two',
    'list_three',
    'list_four',
    'list_five',
    'service_booking_url',
    'content_three',
    'content_four',
    'title_two',
    'list_six',
    'list_seven',
    'list_eight',
    'service_video',
    'finding_us_id',
    'breadcrumbarea_id',
    'orignalservice_id',

        ];

       
        public function columntwo(){
            return $this->belongsTo(ColumnsTwo::class, 'two_columns_id','id');
        }

        public function breadcrumbarea(){
            return $this->belongsTo(BreadCrumbArea::class, 'breadcrumbarea_id','id');
        }

        public function findingus(){
            return $this->belongsTo(FindingUs::class, 'finding_us_id','id');
        }

        public function orignalservice(){
            return $this->belongsTo(OriginalService::class, 'orignalservice_id','id');
        }
}
