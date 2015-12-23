<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materiales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Crea la tabla de materiales
        Schema::create('materiales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('producto_id')->unsigned();
            $table->integer('cantidad');
            $table->float('costo_produccion', 10);
            $table->time('tiempo_produccion');
            $table->boolean('estado');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //elimina la tabla materiales
        Schema::drop('materiales');
    }
}