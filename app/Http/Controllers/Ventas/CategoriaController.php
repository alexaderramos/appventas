<?php

namespace App\Http\Controllers\Ventas;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Ventas\categoria;
use App\Http\Requests\CategoriaCreateRequest;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Session;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=categoria::paginate(0);
        return view('categoria.read',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(),[
        'Nombre' => 'required|unique:categoria,Nombre',
        'Descripcion' => 'required', 
        ]);
        if ($validator->fails()){
             return redirect()->back()
             ->withErrors($validator->errors());
        }
        else{
        categoria::create($request->all());
        Session::flash('save','se ha creado correctamente');
        return redirect('/categoria');
        }       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias=categoria::find($id);
        return view('categoria.show',compact('categorias'));
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $categorias=categoria::FindOrFail($id);
         return view('categoria.edit',compact('categorias'));
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
        $categorias = categoria::find($id);
        $categorias->fill($request->all());
        $categorias->save();
        return redirect('categoria');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias=categoria::find($id);
        $categorias->delete();
        return redirect('/categoria');
       
       
    }
}
