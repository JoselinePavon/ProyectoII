<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Venta extends Model
{
    protected $guarded =[''];

    protected $table = "venta";

    public function detallesVenta()
    {
        return $this->hasMany(DetalleVenta::class, 'venta_id');
    }


}
