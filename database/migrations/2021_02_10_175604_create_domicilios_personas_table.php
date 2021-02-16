<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios_personas', function (Blueprint $table) {
            $table->id();
            $table->string('calle',40);
            $table->string('colonia',40);
            $table->BigInteger('pais_id')->unsigned()->default(117);;
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->BigInteger('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->BigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->BigInteger('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->boolean('activo')->default(1);
            $table->string('numero_exterior',5);
            $table->string('numero_interior',5);
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
        Schema::dropIfExists('domicilios_personas');
    }
}
