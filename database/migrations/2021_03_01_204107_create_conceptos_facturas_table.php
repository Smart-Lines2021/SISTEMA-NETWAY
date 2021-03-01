<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConceptosFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conceptos_facturas', function (Blueprint $table) {
            $table->id();
            $table->double('cantidad');
            $table->double('unidad')->nullable();
            $table->integer('no_identificacion')->nullable();
            $table->string('descripcion',200);
            $table->double('valor_unitario');
            $table->double('importe');
            $table->string('clave_producto',20);
            $table->string('clave_unidad',20);
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
        Schema::dropIfExists('conceptos_facturas');
    }
}
