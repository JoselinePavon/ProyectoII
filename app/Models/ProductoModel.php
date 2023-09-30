<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ProductoModel extends Model
{
    use HasFactory;
    public $table='producto';
    public $timestamps=false;
    protected $fillable=
        ['codigo_producto', 'nombre_producto', 'precio_venta', 'marca', 'foto_producto', 'categoria',];
    protected $primaryKey= 'codigo_producto';
}

