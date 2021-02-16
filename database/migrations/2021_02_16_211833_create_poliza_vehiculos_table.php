<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolizaVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poliza_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('vehiculo_id')->unsigned();
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
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
        Schema::dropIfExists('poliza_vehiculos');
    }
}
