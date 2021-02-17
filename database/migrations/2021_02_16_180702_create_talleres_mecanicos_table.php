<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalleresMecanicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talleres_mecanicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',120);
            $table->string('telefono',15)->nullable($value=true);
            $table->text('direccion')->nullable($value=true);;
            $table->string('persona_contacto')->nullable($value=true);
            $table->string('correo_electronico')->nullable($value=true);
            $table->text('observaciones')->nullable($value=true);
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
        Schema::dropIfExists('talleres_mecanicos');
    }
}
