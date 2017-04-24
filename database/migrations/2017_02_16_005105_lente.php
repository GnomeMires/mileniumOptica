<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lente', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('codigoLente',25)->unique();
            $table->string('tipoLente',25)->nullable();
            $table->string('esferaLente',25)->nullable();
            $table->string('cilindroLente',25)->nullable();
            $table->string('diametro',25)->nullable();
            $table->float('precioVenta')->nullable();
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
        Schema::drop('lente');
    }
}
