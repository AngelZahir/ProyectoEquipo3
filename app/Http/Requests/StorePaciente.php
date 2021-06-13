<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaciente extends FormRequest
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
            'medicoId' => '',
            'direccionId' => '',
            'nombre' => 'required | min:5 | max:400',
            'ap_paterno' => 'required | min:5 | max:400',
            'ap_materno' => 'required | min:5 | max:400',
            'edad' => 'required | min:1 | max:400'
        ];
    }
}
