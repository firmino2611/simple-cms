<?php

namespace App\Http\Controllers\Sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Usuario;

class UsuarioCtrl extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function registrar(){
        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function autenticar(Request $request){
        // return $request->all();
        $usuario = Usuario::where('email', $request->usuario)
                                ->get()->first();

        if($usuario){
            if(Hash::check($request->senha, $usuario->senha)){
                Auth::login($usuario);

                return redirect()->route('dashboard');
            }

            \Session::flash('erro', array(
                'mensagem' => 'A sua senha está incorreta.'
            ));
            return redirect()->route('login');
        }

        \Session::flash('erro', array(
            'mensagem' => 'O seu usuário é inválido.'
        ));
        return redirect()->route('login');

    }

    public function salvar(Request $request){
        // return $request->all();
        $usuario = Usuario::create(array(
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => bcrypt($request->senha)
        ));
        $usuario->assignRole('assinante');
        Auth::login($usuario);
        return redirect()->route('dashboard');
    }
}
