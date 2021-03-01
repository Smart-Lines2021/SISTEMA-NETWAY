<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpuestosFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impuestos_facturas', function (Blueprint $table) {
            $table->id();
            $table->double('impuesto_total');
            $table->BigInteger('factura_id')->unsigned();
            $table->foreign('factura_id')->references('id')->on('facturas');
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
        Schema::dropIfExists('impuestos_facturas');
    }
}
