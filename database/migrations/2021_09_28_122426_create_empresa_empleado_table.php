<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_empleado', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_empresa');
            $table->unsignedBigInteger('id_empleado');

            $table->foreign('id_empresa')->reference('id')->on('empresas');
            $table->foreign('id_empleado')->reference('id')->on('empleados');

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
        Schema::dropIfExists('empresa_empleado');
    }
}
