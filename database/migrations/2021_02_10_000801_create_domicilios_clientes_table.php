<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('calle',40);
            $table->string('numero',5);
            $table->string('colonia',40);
            $table->BigInteger('pais_id')->unsigned()->default(117);
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->BigInteger('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->BigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->BigInteger('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('domicilios_clientes');
    }
}
