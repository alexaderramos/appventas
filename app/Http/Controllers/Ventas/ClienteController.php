<?php

namespace App\Http\Controllers\Ventas;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Ventas\cliente;
use Redirect;
use Session;
use Illuminate\Support\Facades\Validator;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = cliente::paginate(5);
        return view('cliente.read',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('cliente.create');
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
        'Nombre' => 'required|unique:cliente,Nombre',
        'Apellidos' => 'required',
        'Direccion' => 'required',
        'Telefono' => 'required|min:9 max:15',
            
        ]);

        if ($validator->fails()){
             return redirect()->back()
             ->withErrors($validator->errors());
        }
        else{
        cliente::create($request->all());
        Session::flash('save','se ha creado correctamente');
        return redirect('/cliente');
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
        $clientes = cliente::find($id);
        return view('cliente.show',compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $clientes=cliente::FindOrFail($id);
         return view('cliente.edit',compact('clientes'));
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
        $clientes = cliente::find($id);
        $clientes->fill($request->all());
        $clientes->save();
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = cliente::find($id);
        $clientes->delete();
        return redirect('/cliente');
    }
}
