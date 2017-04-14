<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallefacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('detalleFactura', function(BluePrint $table){
            $table->increments('id');
            $table->integer('NoFactura')->unsigned();
            $table->integer('idProducto')->unsigned();
            $table->decimal('CantidadPedida',8,2);
            $table->decimal('PrecioTotal',8,2);
            $table->foreign('NoFactura')->references('id')->on('factura');
            $table->foreign('idProducto')->references('id')->on('producto');
        }); 
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalleFactura');

    }
}
