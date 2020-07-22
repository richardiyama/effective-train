<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StandardServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'services_image' => $this->services_image,
            'title' => $this->title,
            'description'=>$this->description,
            'services_details'=> $this->services_urls,
            'service_done'  =>$this->servicedone,
            'services' =>$this->originalservice,
            'column' =>$this->columntwo,
        ];
    }
}
