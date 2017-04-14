<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductoCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'CodProducto'=>'required|string|unique:producto,CodProducto',
            'Descripcion'=>'required|string',
            'idProveedor'=>'required',
            'idCategoria'=>'required',
            'PrecioCosto'=>'required',
            'PrecioVenta'=>'required',
            'Cantidad'=>'required|integer',
            'Foto'=>'required|image'
        ];
    }
}
