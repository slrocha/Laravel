<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getIndex()
    {
        return View::make('hello');
    }
 
    public function getLogin()
    {
        $titulo = 'Entrar - Desenvolvendo com Laravel';
        return View::make('home/entrar', compact('titulo'));
    }
 
    public function postLogin()
    {
        // Opção de lembrar do usuário
        $remember = false;
        if(Input::get('remember'))
        {
            $remember = true;
        }
        
        // Autenticação
        if (Auth::attempt(array(
            'email' => Input::get('email'), 
            'password' => Input::get('senha')
            ), $remember))
        {
            return Redirect::to('artigos');
        }
        else
        {
            return Redirect::to('entrar')
                ->with('flash_error', 1)
                ->withInput();
        }
    }
    
    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/home');
    }
}
