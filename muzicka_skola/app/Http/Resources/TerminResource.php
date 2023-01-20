<?php

namespace App\Http\Resources;

use App\Models\Profesor;
use App\Models\Ucenik;
use Illuminate\Http\Resources\Json\JsonResource;

class TerminResource extends JsonResource
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
            'id' => $this->resource->id,
            'profesor' => Profesor::find($this->resource->id_profesor),
            'ucenik' => Ucenik::find($this->resource->id_ucenik),
            'datum_casa' => $this->resource->datum_casa,
        ];
    }
}
