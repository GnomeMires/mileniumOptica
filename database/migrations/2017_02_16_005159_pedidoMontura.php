<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PedidoMontura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidoMontura', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->date('fechaPedido',10)->nullable();
            $table->string('estadoPedido',15)->nullable();
            $table->float('costoTotal')->default(0);
            $table->text('observaciones')->nullable();

            $table->integer('tiendaID')->unsigned();
            $table->integer('usuarioID')->unsigned();
            $table->foreign('tiendaID')->references('id')->on('tienda')->onDelete('cascade');
            $table->foreign('usuarioID')->references('id')->on('cms_users')->onDelete('cascade');
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
        Schema::drop('pedidoMontura');
    }
}
