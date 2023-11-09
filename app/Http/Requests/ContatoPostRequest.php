<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'add_remove' => ['required','string'],
            'nome' => ['required','string'],
            'filial' => ['required','string'],
            'email' => ['required','string'],
            'transportadora' => ['required','string'],
            'numero' => ['required','string'],
            'status' => ['nullabe','string'],
            'edit' => ['nullabe','string'],
        ];
    }

    public function messages()
    {
        return [
            'required'=>'Obrigatório preencher esse campo !',
            'add_remove.required'=>'Selecione qual opção deseja realizar'
        ];
    }
}
