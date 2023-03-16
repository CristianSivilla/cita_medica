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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('dni_doctor');
            $table->string('dni_paciente');
            $table->unsignedBigInteger('id_hospital');
            $table->foreign('id_hospital')->references('id_hospital')->on('hospital');
            $table->foreign('dni_paciente')->references('dni_paciente')->on('pacientes');
            $table->foreign('dni_doctor')->references('dni_doctor')->on('doctores');
            $table->date('horaCita');
            $table->string('Especialidad');
            $table->string('DescripcionCita');
            $table->string('esCancelada');
            $table->boolean('esPospuesta');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * 
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
};
