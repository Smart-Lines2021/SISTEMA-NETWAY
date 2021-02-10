<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('no_proveedor',10);
            $table->string('nombre',40);
            $table->string('descripcion',80);
            $table->string('persona_contacto',40);
            $table->double('saldo')->default(0.00);
            $table->BigInteger('categoria_proveedor_id')->unsigned();
            $table->foreign('categoria_proveedor_id')->references('id')->on('categorias_proveedores');
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
        Schema::dropIfExists('proveedores');
    }
}
