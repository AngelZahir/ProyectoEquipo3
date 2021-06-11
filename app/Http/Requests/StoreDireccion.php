<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDireccion extends FormRequest
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
            'calle' => 'required | min:1 | max:100',
            'colonia' => 'required | min:1 | max:100',
            'delegacion' => 'required | min:5 | max:100',
            'codigo_postal' => 'required | min:5 | max:10',
            'estado' => 'required | min:5 | max:400',
            'ciudad' => 'required | min:5 | max:400'
        ];
    }
}
