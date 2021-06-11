<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicoRequest extends FormRequest
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
            'nombre' => 'required | min:1 | max:20',
            'ap_paterno' => 'required | min:1 | max:20',
            'ap_materno' => 'required | min:1 | max:20',
            'cedula' => 'required | min:1 | max:45'
        ];
    }
}
