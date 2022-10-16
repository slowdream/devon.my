<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CardResource extends JsonResource
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
            'name' => $this->name,
            'photo' => $this->photo,
            'photos' => $this->photos,
            'greeting' => $this->greeting,
            'description' => $this->description,
            'birthdate' => $this->birthdate,
            'weight' => $this->weight,
            'height' => $this->height,
            'chest' => $this->chest,
            'hair' => $this->hair,
            'nationality' => $this->nationality,
            'figure' => $this->figure,
            'orientation' => $this->orientation,
        ];
    }
}
