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
   
        Schema::create('hospital', function (Blueprint $table) {
            $table->bigIncrements('id_hospital');
            $table->string('nombre');
            $table->string('direccion');
            $table->integer('codigo_postal');
            $table->integer('telefono');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital');
    }
};
