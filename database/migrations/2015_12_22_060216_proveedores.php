<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Crea la tabla de proveedores
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('direccion', 100);
            $table->string('rfc', 100);
            $table->string('telefono', 10);
            $table->string('correo')->unique();
            $table->string('giro', 20);
            $table->string('descripcion', 100);
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
        //elimina la tabla proveedores
        Schema::drop('proveedores');
    }
}
