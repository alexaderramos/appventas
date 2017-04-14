<?php

namespace App\Models\ventas;

use Illuminate\Database\Eloquent\Model;

class detalleFactura extends Model
{
    //
    protected $table='detalleFactura';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable=[
        'id','NoFactura','idProducto','CantidadPedida','PrecioTotal'
    ];

    function detalleFacturaProducto(){
        $this->hasmany(producto::class);
    }
     function detalleFactura(){
        $this->hasmany(factura::class);
    }
}
