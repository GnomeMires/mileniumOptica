<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrecioMedicion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precioMedicion', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->float('precio')->default(0);
            
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
        Schema::drop('precioMedicion');
    }
}