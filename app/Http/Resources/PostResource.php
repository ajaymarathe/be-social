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
        // return parent::toArray($request);
        return [
           'post' => $this->post,
           'slug' => $this->slug,
           'profile_image' => $this->profile_image,
           'user' => $this->user->name,
           'created_at' => $this->created_at->diffForHumans()
       ];
    }
}
