<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Venta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->date('fechaVenta');
            $table->string('estado',15);
            $table->float('total');
            $table->float('restante')->default(0);
            $table->float('cancelado')->default(0);

            $table->bigInteger('personaID')->unsigned();
            $table->integer('tiendaID')->unsigned();
            $table->integer('userID')->unsigned();
            $table->foreign('userID')->references('id')->on('cms_users')->onDelete('cascade');
            $table->foreign('personaID')->references('id')->on('persona')->onDelete('cascade');
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
        Schema::drop('venta');
    }
}