<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' =>  $this->title,
            'author' => $this->author,
            'genere' => $this->genere,
            'description' => $this->description,
            'isbn' => $this->isbn,
            'image' => $this->image,
            'publisher' => $this->publisher,
            'published' => $this->published
        ];
    }
}
