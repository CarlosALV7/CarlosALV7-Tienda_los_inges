<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuariosResource extends JsonResource
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
            'id' => $this->id
            , 'name' => $this->name
            , 'primer_apellido' => $this->primer_apellido
            , 'segundo_apellido' => $this->segundo_apellido
            , 'sexo' => $this->sexo
            , 'fecha_nacimiento' => $this->fecha_nacimiento
            , 'numero_celular' => $this->numero_celular
            , 'numero_fijo' => $this->numero_fijo
            , 'email' => $this->email
            , 'direcciones_id' => $this->direcciones_id
            , 'email_verified_at' => $this->email_verified_at
            , 'rfc' => $this->rfc
            , 'perfil' => $this->perfil
            , 'estatus' => $this->estatus
            , 'password' => $this->password
            , 'remember_token' => $this->remember_token
            , 'created_at' => $this->created_at
            , 'updated_at' => $this->updated_at
        ];
    }
}
