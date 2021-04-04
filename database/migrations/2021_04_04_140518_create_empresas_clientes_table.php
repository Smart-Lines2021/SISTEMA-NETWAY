<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('rfc',40);
            $table->string('domicilio_fiscal',100);
            $table->string('telefono',12);
            $table->string('correo',80);
            $table->string('horario',80);
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
        Schema::dropIfExists('empresas_clientes');
    }
}
