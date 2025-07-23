<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable=[
        'fecha_pedido',
        'estado',
        'id_usuario'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'id_usuario');
    }
}
