<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InventarioMontura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarioMontura', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->integer('cantidad')->default(0);
            $table->bigInteger('monturaID')->unsigned();
            $table->integer('tiendaID')->unsigned();

            $table->foreign('tiendaID')->references('id')->on('tienda')->onDelete('cascade');
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
        Schema::drop('inventarioMontura');
    }
}
