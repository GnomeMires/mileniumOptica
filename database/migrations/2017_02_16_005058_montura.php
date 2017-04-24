<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Montura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('montura', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('codigoMontura',25)->unique();
            $table->string('marcaMontura',25)->nullable();
            $table->string('color',25)->nullable();
            $table->string('imagen')->nullable();
            $table->float('precioVenta')->nullable();
            $table->string('ancho',20)->nullable();
            $table->text('descripcion')->nullable();
            $table->string('estado',15)->nullable();
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
        Schema::drop('montura');
    }
}
