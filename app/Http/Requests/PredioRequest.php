<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PredioRequest extends FormRequest
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
            'nome' => 'required|unique:predios',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => "O nome do prédio é requerido.",
            'nome.unique' => "Já existe um prédio cadastrado com esse nome."
        ];
    }

}
