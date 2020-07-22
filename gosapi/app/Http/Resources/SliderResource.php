<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
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
            'textPosition' => $this->text_position,
            'bgImage' => $this->bg_Image,
            'category' => $this->category,
            'description' => $this->description,
            'buttonText' => $this->button_text,
            'buttonLink' => $this->button_link

        ];
    }
}
