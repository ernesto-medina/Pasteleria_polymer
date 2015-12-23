<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Crea la tabla de productos
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('descripcion', 100);
            $table->float('costo_compra');
            $table->float('costo_venta');
            $table->integer('categoria_id')->unsigned();
            $table->string('unidad_medida', 10);
            $table->float('medida');
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        //Elimina la tabla productos
        Schema::drop('productos');  
    }
}
