<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctores', function (Blueprint $table) {
            $table->string('dni_doctor')->primary();
            $table->unsignedBigInteger('id_hospital');
            $table->foreign('dni_doctor')->references('dni')->on('users');
            $table->foreign('id_hospital')->references('id_hospital')->on('hospital');
            $table->dateTime('horaEntrada');
            $table->dateTime('horaSalida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctores');
    }
};
