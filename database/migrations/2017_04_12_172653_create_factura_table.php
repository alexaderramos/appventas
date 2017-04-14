<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('factura', function(BluePrint $table){
            $table->increments('id');
            $table->date('Fecha');
            $table->integer('IdCliente')->unsigned();
            $table->decimal('TotalFactura',8,2);
            $table->foreign('idCliente')->references('id')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('factura');
    }
}
