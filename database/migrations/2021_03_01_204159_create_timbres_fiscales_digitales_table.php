<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimbresFiscalesDigitalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timbres_fiscales_digitales', function (Blueprint $table) {
            $table->id();
            $table->string('version',10);
            $table->string('uuid',50);
            $table->string('fecha',25);
            $table->string('rfc',20);
            $table->text('sello');
            $table->string('no_certificado_sat',30);
            $table->text('sello_sat');
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
        Schema::dropIfExists('timbres_fiscales_digitales');
    }
}
