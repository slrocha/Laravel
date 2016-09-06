<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Funci;


class FunciController extends Controller{

    public function registerUser(){
    	return view('user.registerUser');
    }

    public function saveServidor(Request $request){

        $user = new Funci();
        $user->nome = Input::get('nome');
        $user->cpf = Input::get('cpf');
        $user->dt_nascimento = Input::get('dt_nascimento');
        $user->sexo = Input::get('sexo');
        $user->nomePai = Input::get('nomePai');
        $user->nomeMae = Input::get('nomeMae');
        $user->obs = Input::get('obs');
        $user->save();

        return ("Operação realizada com sucesso!");
    }
}
