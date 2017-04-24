<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrecioMedida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precioMedida', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->float('razon')->nullable();
            $table->float('precio')->default(0);
            $table->string('medida',20)->nullable();

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
        Schema::drop('precioMedida');
    }
}