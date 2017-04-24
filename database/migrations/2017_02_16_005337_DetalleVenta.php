<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleVenta', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('nombreDetalle',50)->nullable();
            $table->bigInteger('productoID')->nullable();
            $table->float('precioDetalle')->default(0);
            $table->string('tipoDetalle',15)->nullable();

            $table->bigInteger('ventaID')->unsigned();
            $table->foreign('ventaID')->references('id')->on('venta')->onDelete('cascade');
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
        Schema::drop('detalleVenta');
    }
}