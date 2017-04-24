<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tienda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tienda', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombretienda',100);
            $table->string('nit',25);
            $table->string('telefono',15);
            $table->string('direccion',50);
            $table->string('tipo',150);
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
        Schema::drop('tienda');
    }
}
