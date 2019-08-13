<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class SedeFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_sede'=>'required|max:45',
            'ciudad'=>'required|max:45',
            'descripcion'=>'required|max:45',
        ];
    }
}
