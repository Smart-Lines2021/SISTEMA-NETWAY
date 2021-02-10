<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionesLaboralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informaciones_laborales', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->BigInteger('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->string('cargo',40);
            $table->string('salario',10);
            $table->string('fecha_comienzo',25);
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
        Schema::dropIfExists('informaciones_laborales');
    }
}
