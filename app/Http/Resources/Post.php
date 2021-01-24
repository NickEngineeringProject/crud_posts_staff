<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => 'posts',
            'id' => $this->id,
            'attributes' => [
                'description' => $this->description,
            ],
            'relationships' => '',
            'links' => [
                'self' => route('posts.show', ['post' => $this->id])
            ]
        ];
    }
}
