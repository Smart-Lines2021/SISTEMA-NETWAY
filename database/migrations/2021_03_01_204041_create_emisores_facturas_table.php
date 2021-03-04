<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmisoresFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emisores_facturas', function (Blueprint $table) {
            $table->id();
            $table->string('rfc',20);
            $table->string('nombre',80);
            $table->integer('regimen_fiscal');
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
        Schema::dropIfExists('emisores_facturas');
    }
}
