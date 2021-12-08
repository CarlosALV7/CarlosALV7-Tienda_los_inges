<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    public $timestamps = false;
    protected $fillable = [
        'id', 'name', 'primer_apellido', 'segundo_apellido', 'sexo', 'fecha_nacimiento', 'numero_celular', 'numero_fijo', 'email', 'direcciones_id', 'email_verified_at', 'rfc', 'password', 'perfil', 'estatus', 'remember_token', 'created_at', 'updated_at'
    ];
}
