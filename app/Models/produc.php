<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Produc
 *
 * @property $id
 * @property $codigo_producto
 * @property $nombre_producto
 * @property $precio_venta
 * @property $marca
 * @property $foto_producto
 * @property $categoria_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Produc extends Model
{

    static $rules = [
		'codigo_producto' => 'required',
		'nombre_producto' => 'required',
		'precio_venta' => 'required',
		'marca' => 'required',
		'foto_producto' => 'required',
		'categoria_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo_producto','nombre_producto','precio_venta','marca','foto_producto','categoria_id'];



}
