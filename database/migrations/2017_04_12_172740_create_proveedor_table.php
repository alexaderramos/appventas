<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('proveedor', function(BluePrint $table){
            $table->increments('id');
            $table->string('Ruc',11)->unique();
            $table->string('Proveedor',50);
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
        Schema::drop('proveedor');
    }
}
