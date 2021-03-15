<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->BigInteger('asistencia_id')->unsigned();
            $table->foreign('asistencia_id')->references('id')->on('asistencias');
            $table->BigInteger('razon_permiso_id')->unsigned();
            $table->foreign('razon_permiso_id')->references('id')->on('razones_permisos');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->boolean('activo')->default(1);
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
        Schema::dropIfExists('permisos');
    }
}
