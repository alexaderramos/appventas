<?php

namespace App\Models\ventas;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class producto extends Model
{

    protected $table='producto';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable=['CodProducto','Descripcion','idProveedor','idCategoria','PrecioCosto','PrecioVenta','Cantidad','Foto'
    ];

    function detalleFacturaProducto(){
        $this->belongsTo(detalleFactura::class);
    }

    function proveedorProducto(){
        $this->hasMany(proveedor::class);
    }
     function categoriaProducto(){
        $this->belongsTo(categoria::class);
    }

    //mutador --> modificar el nombre de la foto antes de ser guardada 
    public function setFotoAttribute($Foto){
        $this->attributes['Foto']= Carbon::now()->second.'_'.$Foto->getClientOriginalName();
        $name=Carbon::now()->second.'_'.$Foto->getClientOriginalName();
        \Storage::disk('local')->put( $name,\File::get($Foto));
    }


    public static function Productos()
    {
        //query builder
        return DB::table('producto')
        ->join('categoria','categoria.id','=','producto.idCategoria')
        ->join('proveedor','proveedor.id','=','producto.idProveedor')
        ->select('producto.*','categoria.Nombre','proveedor.Proveedor')
        ->get();
        //->paginate(5);

    }
}
