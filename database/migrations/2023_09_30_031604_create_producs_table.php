<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('producs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('codigo_producto');
            $table->string('nombre_producto');
            $table->integer('precio_venta');
            $table->string('marca');
            $table->string('foto_producto');
            $table->string('categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producs');
    }
};
