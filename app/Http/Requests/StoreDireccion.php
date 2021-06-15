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
            'calle' => 'required | min:1 | max:20',
            'colonia' => 'required | min:1 | max:45',
            'delegacion' => 'required | min:5 | max:20',
            'codigo_postal' => 'required | min:1 | max:20',
            'estado' => 'required | min:1 | max:20',
            'ciudad' => 'required | min:1 | max:20'
        ];
    }
}
