<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidarCadastro extends Request
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

            'nome' => 'required',
            'cpf'  => 'required|numeric',
            'dt_nascimento'  => 'required|date',
            'sexo'  => 'required',
            'nomePai'  => 'required',
            'nomeMae'  => 'required',
            
        ];
    }

    /**
     * Get the messages
     *
     * @return array
     */
    public function messages()
    {
        return [

            'nome.required' => 'O campo Nome é obrigatório.',
            'cpf.required'  => 'O campo CPF é obrigatório. ',
            //'cpf.max'  => 'O campo CPF deve conter no máximo 11 números.',
           // 'cpf.min'  => 'O campo CPF deve conter no minímo 11 números.',
            'cpf.numeric' => 'O campo CPF só pode conter números.',
            'dt_nascimento.required'  => 'O campo Data de Nascimento é obrigatório.',
            //'dt_nascimento.max'  => 'O campo Data de Nascimento deve conter no máximo 8 números.',
            //'dt_nascimento.min'  => 'O campo Data de Nascimento deve conter no mínimo 8 números.',
            'dt_nascimento.date' => 'O campo Data de Nascimento só pode conter números.',
            'sexo.required'  => 'Escolha pelo menos uma opção no campo Sexo. ',
            'nomePai.required'  => 'O campo Nome do Pai é obrigatório.',
            'nomeMae.required'  => 'O campo Nome da Mãe é obrigatório.',
            
        ];
    }
}
