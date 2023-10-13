<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $nombre_cliente
 * @property $direccion_cliente
 * @property $referencias
 * @property $numero_telefono
 * @property $tipo_servicio
 * @property $created_at
 * @property $updated_at
 * @property $users_id
 *
 * @property Asignacion[] $asignacions
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{

    static $rules = [
		'nombre_cliente' => 'required',
		'direccion_cliente' => 'required',
		'referencias' => 'required',
		'numero_telefono' => 'required',
		'tipo_servicio' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_cliente','direccion_cliente','referencias','numero_telefono','tipo_servicio','users_id', 'estados_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */


    public function asignacions()
    {
        return $this->hasMany('App\Models\Asignacion', 'servicios_id', 'id');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }



}
