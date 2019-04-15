<?php

namespace estoque\Http\Controllers\Auth;

use Illuminate\Routing\Controller;

//use estoque\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

//use Request;

class LoginController extends Controller
{


    //use AuthenticatesUsers;

    protected $redirectTo = '/home';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function form(){
        return view('login.form_login');
    }

    public function login(Request $request){
        //credenciais
        $credenciais = $request->only('email', 'password');
        //login
        if( Auth::attempt($credenciais) ){
            //return 'Usuário está logado!';
            return redirect('/produtos');
        }
        return 'Usuário não existe!';

        //retornar alguma view
    }
    public function logout(){
        if( Auth::check() ){
            Auth::logout();
            //return 'Usuário está deslogado!';
            return redirect('/produtos');
        }
    }
}
