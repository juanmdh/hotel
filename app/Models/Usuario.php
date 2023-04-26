<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash; //PARA ENCRYPTAR

class Usuario extends Model
{

    use HasFactory;

    public function setContrasenaAttribute($contrasena)
    {
        $this->attributes['contrasena'] = Hash::make($contrasena);
    }
}
