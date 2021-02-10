<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',40);
            $table->string('modelo',30);
            $table->integer('año');
            $table->double('kilometraje')->default(0.00);
            $table->string('placa',30);
            $table->string('color',30);
            $table->string('no_serie',30);
            $table->BigInteger('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->BigInteger('tipo_vehiculo_id')->unsigned();
            $table->foreign('tipo_vehiculo_id')->references('id')->on('tipo_vehiculos');
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
        Schema::dropIfExists('vehiculos');
    }
}
