<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('persona', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('ciPersona',20)->nullable();
            $table->string('nombreCompleto',150)->nullable();
            $table->string('direccion',50)->nullable();
            $table->string('telefono',15)->nullable();
            $table->string('celular',15)->nullable();
            $table->date('fechaNacimiento')->nullable();
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
        Schema::drop('persona');
    }
}
