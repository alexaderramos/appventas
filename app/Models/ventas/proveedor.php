<?php

namespace App\Models\ventas;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    //
    protected $table='proveedor';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable=[
        'id','Ruc','Proveedor','Telefono','Direccion'
    ];
    
    function producto(){
        $this->belongsto(producto::class);
    }
}
