<?php

namespace App\Models\ventas;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    //
    protected $table='factura';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable=[
        'id','Fecha','idCliente','TotalFactura'
    ];

    function detalleFactura(){
        $this->belongsTo(detalleFactura::class);
    }

    function factura(){
        $this->hasmany(cliente::class);
    }

}
