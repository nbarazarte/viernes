<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMascotasPerdidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_mascotasPerdidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lng_idusuario');
            $table->string('str_dueno');
            $table->string('str_telefono');
            $table->string('str_correo');
            $table->string('str_mascota');
            $table->string('str_especie');
            $table->string('str_ruta_foto');
            $table->string('str_ciudad');
            $table->string('str_sector');
            $table->string('str_fecha_perdida');
            $table->string('txt_descripcion');
            $table->string('str_estatus_mascota')->default('perdida');
            $table->string('str_estatus_publicacion')->default('revision');
            $table->boolean('bol_eliminado')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_mascotasPerdidas');
    }
}
