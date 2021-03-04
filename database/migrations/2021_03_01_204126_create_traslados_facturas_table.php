<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasladosFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traslados_facturas', function (Blueprint $table) {
            $table->id();
            $table->double('base');
            $table->string('impuesto',20);
            $table->string('tipo_factor',20);
            $table->double('cuota');
            $table->double('importe');
            $table->BigInteger('concepto_factura_id')->unsigned();
            $table->foreign('concepto_factura_id')->references('id')->on('conceptos_facturas');
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
        Schema::dropIfExists('traslados_facturas');
    }
}
