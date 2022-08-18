<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
// use Illuminate\Foundation\Http\FormRequest;


class ZonaTipoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id_zonas_tipo,
            'name1' => $this->nom_corto .' --> '.$this->nombre_
        ];
    }

    // public function rules()
    // {
    //     return [
    //         "nombre_" => "required"
    //     ];
    // }
}