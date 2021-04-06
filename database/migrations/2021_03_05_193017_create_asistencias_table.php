<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->BigInteger('horario_id')->unsigned();
            $table->foreign('horario_id')->references('id')->on('horarios');
            $table->string('hora_entrada',10)->nullable();
            $table->string('hora_salida',10)->nullable();
            $table->enum('estado', ['Presente', 'Ausente','Justificado']);
            $table->date('fecha');
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
        Schema::dropIfExists('asistencias');
    }
}
