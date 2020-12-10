<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('predios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',25);
            $table->text('ubicacion');
            $table->text('tamaño');
            $table->string('planta',25);
            $table->string('cantidad');
            $table->string('nomina');
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
        Schema::dropIfExists('predios');
    }
}
