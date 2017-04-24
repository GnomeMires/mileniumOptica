<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedidaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidaPersona', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('ad',10)->nullable();
            $table->date('fecha')->nullable();
            $table->string('esferaDerecha',10)->nullable();
            $table->string('esferaIzquierda',10)->nullable();
            $table->string('cilindroDerecha',10)->nullable();
            $table->string('cilindroIzquierda',10)->nullable();
            $table->string('ejeDerecho',10)->nullable();
            $table->string('ejeIzquierdo',10)->nullable();
            $table->string('prismaDerecho',10)->nullable();
            $table->string('prismaIzquierdo',10)->nullable();
            $table->string('aVisualDerecho',10)->nullable();
            $table->string('aVisualIzquierdo',10)->nullable();
            $table->string('dp',10)->nullable();
            $table->string('dv',10)->nullable();
            $table->string('filtro',40)->nullable();
            $table->text('observaciones')->nullable();

            $table->bigInteger('personaID')->unsigned();
            $table->foreign('personaID')->references('id')->on('persona')->onDelete('cascade');
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
        Schema::drop('medidaPersona');
    }
}
