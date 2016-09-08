<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Funci;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ValidarCadastro;
use Illuminate\Support\Facades\Redirect;


class FunciController extends Controller{

    public function registerUser(){
    	return view('user.registerUser');
    }

    public function saveServidor(ValidarCadastro $request, Funci $user){

        //$user = new Funci();

        $user->nome = $request->get('nome');
        $user->cpf = $request->get('cpf');
        $user->dt_nascimento = $request->get('dt_nascimento');
        $user->sexo = $request->get('sexo');
        $user->nomePai = $request->get('nomePai');
        $user->nomeMae = $request->get('nomeMae');
        $user->obs = Input::get('obs');
        $user->save();

        return ("Operação realizada com sucesso!");
    }

    public function edit($id){
        $user = Funci::find($id);
        if (is_null($user)){
            return Redirect::route('user');
        }
        return view('user.editUser', compact('user'));
    }

    public function update($id){
        $input = Input::all();
        $validation = Validator::make($input, Funci::$rules);
        if ($validation->passes()){
            $user = Funci::find($id);
            $user->update($input);
            return Redirect::route('user', $id);
        }
        return Redirect::route('user.editUser', $id)
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
    }
}
