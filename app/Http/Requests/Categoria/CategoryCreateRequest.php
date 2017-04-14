<?php

namespace App\Http\Requests\Categoria;

use App\Http\Requests\Request;

class CategoryCreateRequest extends Request
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
         'Nombre' =>'requerid|min:3|unique:categoria,Nombre',
        'Descripcion' =>'required',
        ];
    }
}
