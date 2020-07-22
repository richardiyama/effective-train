<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceDetailsResource extends JsonResource
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
            'two_columns' => $this->columns,
            'service_image' => $this->image,
            'content_one' => $this->content_one,
            'content_two' => $this->content_two,
            'title_one' => $this->title_one,
            'list_one' => $this->list_one,
            'list_two' => $this->list_two,
            'list_three' => $this->list_three,
            'list_four' => $this->list_four,
            'list_five' => $this->list_five,
            'service_booking_url' => $this->service_url,
            'content_three' => $this->content_three,
            'content_four' => $this->content_four,
            'title_two' => $this->title_two,
            'list_six' => $this->list_six,
            'list_seven' => $this->list_seven,
            'list_eight' => $this->list_eight,
            'finding_us'=> $this->findingus,
            'breadcrumbarea' => $this->breadcrumbarea
            
            
        ];
    }
}
