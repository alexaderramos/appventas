<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente',function(BluePrint $table){
            $table->increments('id');
            $table->string('Nombre',50);
            $table->string('Apellidos',50);
            $table->string('Telefono',15);
            $table->string('Direccion',50);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cliente');
    }
}
