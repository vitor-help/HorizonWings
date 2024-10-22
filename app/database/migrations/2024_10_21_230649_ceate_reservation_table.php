<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CeateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('id_reserva');
            $table->string('origem');
            $table->string('destino');
            $table->string('ticket');
            $table->date('data_retorno')->nullable();
            $table->date('data_partida');
            $table->integer('adulto');
            $table->integer('crianca')->nullable();
            $table->string('classe');
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
        //
    }
}
