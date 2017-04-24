<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InventarioLente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarioLente', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->integer('cantidad')->default(0);
            $table->bigInteger('lenteID')->unsigned();
            $table->integer('tiendaID')->unsigned();

            $table->foreign('tiendaID')->references('id')->on('tienda')->onDelete('cascade');
            $table->foreign('lenteID')->references('id')->on('lente')->onDelete('cascade');
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
        Schema::drop('inventarioLente');
    }
}
