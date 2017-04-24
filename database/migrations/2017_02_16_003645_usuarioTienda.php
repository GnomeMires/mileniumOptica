<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioTienda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioTienda', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->integer('userID')->unsigned();
            $table->integer('tiendaID')->unsigned();
            $table->foreign('tiendaID')->references('id')->on('tienda')->onDelete('cascade');
            $table->foreign('userID')->references('id')->on('cms_users')->onDelete('cascade');
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
        Schema::drop('usuarioTienda');
    }
}
