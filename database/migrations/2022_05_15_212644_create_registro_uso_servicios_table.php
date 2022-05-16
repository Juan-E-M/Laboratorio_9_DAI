<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroUsoServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_uso_servicios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_srv');
            $table->integer('id_usr');
            $table->integer('id_emp');
            $table->integer('id_hab');
            $table->date('fecha_solicitud');
            $table->date('fech_desde');
            $table->date('fecha_hasta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_uso_servicios');
    }
}
