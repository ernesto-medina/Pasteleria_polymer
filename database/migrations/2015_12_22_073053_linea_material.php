<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LineaMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Crea la tabla linea_material
        Schema::create('linea_material', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('producto_id')->unsigned();
            $table->integer('material_id')->unsigned();
            $table->integer('cantidad_producto');
            $table->String('descripcion');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('material_id')->references('id')->on('materiales');
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
        //elimina la tabla linea_material
        Schema::drop('linea_material');
    }
}
