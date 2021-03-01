<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprobantesFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobantes_facturas', function (Blueprint $table) {
            $table->id();
            $table->string('version',10);
            $table->string('condiciones_pago',100)->nullable();
            $table->string('fecha',25);
            $table->integer('folio');
            $table->integer('forma_pago');
            $table->integer('lugar_expedicion');
            $table->string('metodo_pago',10);
            $table->string('moneda',5);
            $table->string('serie',5);
            $table->double('subtotal');
            $table->integer('tipo_cambio');
            $table->string('tipo_comprobante',5);
            $table->double('total');
            $table->text('certificado');
            $table->string('no_certificado',50);
            $table->text('sello_contribuyente');
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
        Schema::dropIfExists('comprobantes_facturas');
    }
}
