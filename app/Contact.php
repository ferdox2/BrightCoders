<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'fechaNac',
        'email',
        'direccion',
        'ciudad',
        'telefono',
        'celular'
    ];
}
