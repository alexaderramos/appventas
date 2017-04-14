<?php

namespace App\Models\Ventas;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table='categoria';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable=[
        'id','Nombre','Descripcion'
    ];
    

    function categoriaProducto(){
      $this->hasmany(producto::class);
    }
}
