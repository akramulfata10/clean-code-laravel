<?php

namespace App\Http\Resources\Api\V1\Posts;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Posts\UserResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->uuid,
            'type' => 'posts',
            'attributes' => [
                'title' => $this->title,
                'body' => $this->body,
                'slug' => $this->slug,
                'description' => $this->description,
                'published' => $this->published,
            ],
            'relationship' => [
                'user' =>  UserResource::collection($this->whenLoaded('user')),   
            ],
            'links' => [
                'self' => route('api:v1:posts:show', $this->uuid),
                'parent' => route('api:v1:posts:index'),
            ],
        ];
    }
}