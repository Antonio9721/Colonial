<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCosechasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('cosechas', function (Blueprint $table) {
            $table->id();
            $table->string('predio',15);
            $table->string('cultivo',20);
            $table->string('cantidad');
            $table->integer('nempleados');
            $table->integer('pago');
            $table->date('fcosecha');
            $table->string('tiempo');
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
        Schema::dropIfExists('cosechas');
    }
}
