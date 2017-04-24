<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recibo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibo', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->bigInteger('noRecibo')->unique();
            $table->date('fechaRecibo')->nullable();
            $table->float('precioTotal')->default(0);
            $table->float('montoCancelado')->default(0);
            $table->float('montoRestante')->default(0);
            $table->string('estado',15)->nullable();
            $table->string('nombre',100)->nullable();
            $table->string('telefono',15)->nullable();
            $table->string('direccion',100)->nullable();

            $table->integer('tiendaID')->unsigned();
            $table->bigInteger('ventaID')->unsigned();
            $table->foreign('tiendaID')->references('id')->on('tienda')->onDelete('cascade');
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
        Schema::drop('recibo');
    }
}