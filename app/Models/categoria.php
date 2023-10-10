<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{

    use HasFactory;
    public $table='categoria';
    public $timestamps=false;
    protected $fillable =[

        'id','descripcion',
    ];

    protected $primaryKey = 'id';

}
