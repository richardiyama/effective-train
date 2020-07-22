<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HomeResource extends JsonResource
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
            'single_service' => $this->singleservice,
            'counter_up_area' => $this->counteruparea,
            'about_two'=> $this->abouttwo,
            'title' => $this->title,
            'about_one' => $this->aboutone

            

        ];
    }
}
