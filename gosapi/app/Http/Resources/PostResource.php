<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'title' => $this->title,
            'post_image' => $this->post_image,
            'content_one' => $this->content_one,
            'blog_image' => $this->blog_image,
            'content_two' => $this->content_two,
            'content_three' => $this->content_three,
            'title_two' => $this->title_two,
            'content_four' => $this->content_four,
            'blog_image_two' => $this->blog_image_two,
            'title_three' => $this->title_three,
            'content_five' => $this->content_five,
            'title_four' => $this->title_four,
            'title_five' => $this->title_five,
            'list_one' => $this->list_one,
            'list_two' => $this->list_two,
            'list_three' => $this->list_three,
            'list_four' => $this->list_four,
            'list_five' => $this->list_five,
            'title_five' => $this->title_five,
            'list_six' => $this->list_six,
            'list_seven' => $this->list_seven,
            'list_eight' => $this->list_eight,
            'list_nine' => $this->list_nine,
            'content_six' => $this->content_six,
            'blog_video' => $this->blog_video,
            'blog_image_three' => $this->blog_image_three,
            'content_seven' => $this->content_seven,
            'home' => $this->homess,
            'blog_area' => $this->blogarea,
            'breadcrumbarea_id' => $this->breadcrumbarea,
        ];
    }
}
