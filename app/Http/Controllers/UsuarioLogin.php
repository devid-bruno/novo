<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioLogin extends Controller
{
        public function index(Request $request){

            $erro = '';
            if($request->get('erro') == 1){
                $erro = 'Usuário e ou senha não existem.';
            }
    
    
            if($request->get('erro') == 2){
                $erro = 'Necessário realizar login para ter acesso a página.';
            }
            return view('site.createuser', ['titulo' => 'Entrar', 'erro' => $erro ]);
    
        }
    
        public function autenticar(Request $request){
          
            //regras de validacao
            $regras = 
            [
                'usuario' => 'email',
                'senha' => 'required'
            ];
    
            //mensagens de feedback de validacao
    
            $feedback =
            [
                'usuario.email' => 'O campo usuário (email) é obrigatório',
                'senha.required' => 'o campo senha é obrigatório'
            ];
    
            $request->validate($regras, $feedback);
    
            $email = $request->get('usuario');
            $password = $request->get('senha');
    
    
            //starting model user
            $user = new User();
    
            $usuario = $user->where('email', $email)->where('password', $password)->get()->first();
            
            if(isset($usuario->name)){
                session_start();
                $_SESSION['nome'] = $usuario->name;
                $_SESSION['email'] = $usuario->email;
    
                return redirect()->route('app.home');
    
            }else{
                return redirect()->route('site.login', ['erro' => 1]);
            }
        }
        public function sair(){
            session_destroy();
            return redirect()->route('site.index');
        }
    }
