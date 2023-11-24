<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'nome'  => ['required','string'],
        'descricao'=> ['max:3000'],
        'imagem'=> ['image'],
        'cursos_id' => ['required'],     
        ];
    }
    public function messages() {
        return[
            'nome.required' => "o campo precisa ser informado",
            'nome.max' => "o campo deve ter no máximo 100 caracteres",
            'descricao.max' => "O campo deve ter no máximo 300 caeracteres",
            'imagem.image' => "A imagem precisa ser dos tipos PNG, JPEG, JPG, ...",
        ];
    }
}
