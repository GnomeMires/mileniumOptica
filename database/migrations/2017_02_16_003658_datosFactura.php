<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatosFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosFactura', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('noAutorizacion',30);
            $table->date('fechaInicio');
            $table->date('fechaLimiteEmision');
            $table->string('noInicio',20);
            $table->string('noFin',20);
            $table->string('noActual',20);
            $table->text('llave');
            $table->string('estado',15);
            $table->integer('tiendaID')->unsigned();
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
        Schema::drop('datosFactura');
    }
}
