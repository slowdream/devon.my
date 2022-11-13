<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhotoCollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'mime_type' => $this->mime_type,
            'custom_properties' => $this->custom_properties,
            'responsive_images' => $this->responsive_images,
            'original_url' => $this->original_url,
            'preview_url' => $this->preview_url,
        ];
    }
}
