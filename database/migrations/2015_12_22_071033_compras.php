<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Compras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Crea la tabla de compras
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleado_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();
            $table->dateTime('fecha_compra');
            $table->string('notas', 100);
            $table->string('origen');
            $table->float('total_compra');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
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
        //elimina la tabla compras
        Schema::drop('compras');
    }
}
