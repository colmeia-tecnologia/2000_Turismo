<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class BusSaleRequest extends FormRequest
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
            'model' => 'required',
            'bodyModel' => 'required',
            'year' => 'required|integer|min:1980',
            'seatings' => 'required|integer|min:1',
            'description' => 'nullable',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'model.required' => 'O campo "Modelo" é obrigatório',

            'bodyModel.required' => 'O campo "Carroceria" é obrigatório',

            'year.required' => 'O campo "Ano" é obrigatório',
            'year.integer' => 'O campo "Ano" deve ser um número inteiro',
            'year.min' => 'O campo "Ano" deve ser no mínimo :min',

            'seatings.required' => 'O campo "Assentos" é obrigatório',
            'seatings.integer' => 'O campo "Assentos" deve ser um número inteiro',
            'seatings.min' => 'O campo "Assentos" deve ser no mínimo :min',
        ];
    }
}
