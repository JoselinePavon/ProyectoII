<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 *
 * @property $id
 * @property $codigo_producto
 * @property $nombre_producto
 * @property $precio_venta
 * @property $marca
 * @property $foto_producto
 * @property $categoria
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class ProductoModel extends Model
{
    use HasFactory;
    public $table='producto';
    public $timestamps=false;
    protected $fillable=
        ['codigo_producto', 'nombre_producto', 'precio_venta', 'marca', 'foto_producto', 'categoria',];
    protected $primaryKey= 'codigo_producto';
}

