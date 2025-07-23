<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre',
        'correo',
        'contrasena',
        'activo'
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class, 'id_usuario');
    }

    public function productos()
    {
        return $this->hasMany(Productos::class, 'id_usuario');
    }
}
