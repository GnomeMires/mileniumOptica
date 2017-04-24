<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListaPaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listaPaciente', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->integer('numero')->default(0);
            $table->string('estado',10)->nullable();
            $table->date('fecha')->nullable();
            $table->bigInteger('personaID')->unsigned();
            $table->integer('tiendaID')->unsigned();

            $table->foreign('tiendaID')->references('id')->on('tienda')->onDelete('cascade');
            $table->foreign('personaID')->references('id')->on('persona')->onDelete('cascade');
        }
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('listaPaciente');
    }
}
