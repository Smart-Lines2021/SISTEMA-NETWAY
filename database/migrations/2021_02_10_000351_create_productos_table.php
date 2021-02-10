<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',40);
            $table->string('descripcion',80);
            $table->double('cantidad')->default(0.00);
            $table->BigInteger('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->BigInteger('categoria_producto_id')->unsigned();
            $table->foreign('categoria_producto_id')->references('id')->on('categorias_productos');
            $table->BigInteger('tipo_producto_id')->unsigned();
            $table->foreign('tipo_producto_id')->references('id')->on('tipo_productos');
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
        Schema::dropIfExists('productos');
    }
}
