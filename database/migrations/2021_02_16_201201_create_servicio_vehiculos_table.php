<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->double('kilometraje',8,2);
            $table->BigInteger('tipo_servicio_id')->unsigned();
            $table->foreign('tipo_servicio_id')->references('id')->on('tipo_servicio_vehiculos');
            $table->BigInteger('taller_id')->unsigned();
            $table->foreign('taller_id')->references('id')->on('talleres_mecanicos');
            $table->BigInteger('vehiculo_id')->unsigned();
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
            $table->text('observaciones')->nullable($value=true);
            $table->date("fecha");
            $table->enum('estado', ['Programado', 'Realizado','Suspendido','Cancelado']);
            $table->enum('tipo_mantenimiento', ['Programado', 'Imprevisto']);
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
        Schema::dropIfExists('servicio_vehiculos');
    }
}
