<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre_cliente
 * @property $direccion_cliente
 * @property $numero_telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class cliente extends Model
{

    static $rules = [
		'nombre_cliente' => 'required',
		'direccion_cliente' => 'required',
		'numero_telefono' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_cliente','direccion_cliente','numero_telefono'];



}
