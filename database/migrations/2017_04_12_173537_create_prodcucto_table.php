<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdcuctoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('producto', function(BluePrint $table){
            $table->increments('id');
            $table->string('CodProducto',10)->unique();
            $table->string('Descripcion',100);
            $table->integer('idProveedor')->unsigned();
            $table->integer('idCategoria')->unsigned();
            $table->decimal('PrecioCosto',8,2);
            $table->decimal('PrecioVenta',8,2);
            $table->integer('Cantidad');
            $table->string('Foto',100)->nullable();
            $table->foreign('idProveedor')->references('id')->on('proveedor');
            $table->foreign('idCategoria')->references('id')->on('categoria');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('producto');
    }
}
