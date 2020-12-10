<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('apellidop',25);
            $table->string('apellidom',25);
            $table->string('curp',18);
            $table->string('correo',30);
            $table->string('telefono',13);
            $table->string('cargo',25);
            $table->date('registro');
            $table->time('ingreso',);
            $table->integer('sueldo',);
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
        Schema::dropIfExists('empleados');
    }
}
