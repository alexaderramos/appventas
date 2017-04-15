<?php

namespace App\Http\Controllers\Ventas;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Redirect;
use App\Models\Ventas\producto;
use App\Models\Ventas\proveedor;
use App\Models\Ventas\categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $productos=producto::Productos();
         return view('producto.read',compact('productos'));
        //  $productos=producto::select('producto.id','producto.Descripcion as producto','CodProducto','Descripcion','proveedor.Proveedor as proveedor','PrecioCosto','PrecioVenta','Cantidad')
        //                    ->join('proveedor','proveedor.id','=','producto.idProveedor')->paginate(3); //me pagina de 2 en 2
        // return view('producto.read')->with('producto',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores=proveedor::lists('Proveedor','id');
        $categorias=categoria::lists('Nombre','id');
        return view('producto.create',compact('proveedores','categorias'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        producto::create($request->all());
        return redirect('producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $productos=producto::find($id);
         return view('producto.show',compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $productos=producto::FindOrFail($id);
         return view('producto.edit',compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos = producto::find($id);
        $productos->fill($request->all());
        $productos->save();
        return redirect('producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
