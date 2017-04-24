<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IngresoMontura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresoMontura', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->date('fechaIngreso');
            $table->string('estadoIngreso',25);
            $table->float('precioTotal')->default(0);
            $table->text('observaciones')->nullable();

            $table->bigInteger('pedidoMonturaID')->unsigned();
            $table->integer('tiendaID')->unsigned();
            $table->foreign('pedidoMonturaID')->references('id')->on('pedidoMontura')->onDelete('cascade');
            $table->foreign('tiendaID')->references('id')->on('tienda')->onDelete('cascade');
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
        Schema::drop('ingresoMontura');
    }
}