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
            $table->integer('codigo_postal');
            $table->string('colonia',40);
            $table->string('numero_interior',5);
            $table->string('numero_exterior',5);
            $table->string('estado',40);
            $table->string('municipio',40);
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
