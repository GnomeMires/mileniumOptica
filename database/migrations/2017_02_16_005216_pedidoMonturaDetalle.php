<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PedidoMonturaDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidoMonturaDetalle', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->integer('cantidad');
            $table->float('precioUnitario');
            $table->float('precioTotal');

            $table->bigInteger('pedidoMonturaID')->unsigned();
            $table->bigInteger('monturaID')->unsigned();
            $table->foreign('pedidoMonturaID')->references('id')->on('pedidoMontura')->onDelete('cascade');
            $table->foreign('monturaID')->references('id')->on('montura')->onDelete('cascade');
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
        Schema::drop('pedidoMonturaDetalle');
    }
}