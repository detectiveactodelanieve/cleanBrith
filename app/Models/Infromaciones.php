<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infromaciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'correo',
        'telefono',
        'direccion'
    ];
}
