<?php

namespace App\Models\ventas;

use Illuminate\Database\Eloquent\Model;
use Validator;
class cliente extends Model
{
    //
    protected $table='cliente';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable=[
        'id','Nombre','Apellidos','Telefono','Direccion'
    ];

    function cliente(){
        $this->belongsTo(factura::class);
    }
    public static $roles=[
      'Nombre'=>'required|min:2|max:20',
      'Apellidos'=>'required|min:2|max:30',
      'Telefono'=>'required|min:2|max:15',
      'Direccion'=>'required',
      
    ];
 
    public static function validar_Data($data){
    $reglas=self::$roles;
      return \Validator::make($data,$reglas);
    }
}
