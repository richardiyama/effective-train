<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OriginalServiceResource extends JsonResource
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
            'name' => $this->name,
            'standard_service'=> $this->standardservice,
            'title' => $this->title,
            'description' => $this->description,
             'servicedetail' => $this->servicedetail

        ];
    }
}
