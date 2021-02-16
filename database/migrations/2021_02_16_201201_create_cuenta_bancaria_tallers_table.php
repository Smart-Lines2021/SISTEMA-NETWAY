<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasBancariasTalleresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas_bancarias_talleres', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('taller_id')->unsigned();
            $table->foreign('taller_id')->references('id')->on('talleres_mecanicos');
            $table->string('no_cuenta',20);
            $table->string('clabe_interbancaria',20);
            $table->BigInteger('taller_id')->unsigned();
            $table->foreign('taller_id')->references('id')->on('talleres_mecanicos');
            $table->text('descripcion')->nullable($value=true);
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
        Schema::dropIfExists('cuenta_bancaria_tallers');
    }
}
