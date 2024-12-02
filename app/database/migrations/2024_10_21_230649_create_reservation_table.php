<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
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
            $table->string('origem')->nullable();
            $table->string('destino')->nullable();
            $table->string('ticket')->nullable();
            $table->date('data_retorno')->nullable();
            $table->date('data_partida')->nullable();
            $table->integer('adulto')->nullable();
            $table->integer('crianca')->nullable();
            $table->string('classe')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
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
