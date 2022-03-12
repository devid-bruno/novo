<?php

namespace App\Http\Controllers;
use \App\Models\SiteContato;
use Illuminate\Http\Request;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos'=> $motivo_contatos]);
    }
    public function salvar(Request $request){
        //realizar a validacao dos dados do formulário recebidos no request
        $regras = [
        'nome' => 'required|min:3|max:40|unique:site_contatos', 
        'telefone' => 'required', 
        'email' => 'email', 
        'motivo_contatos_id' => 'required', 
        'mensagem' => 'required|max:2000' 
        ];
        
        $feedback = [
            'nome.required' => 'O campo nome precisa ser preenchido.',
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo só pode ter no máximo 40 caracteres.',
            'nome.unique' => 'O nome informado já está em uso.',
            'telefone.required' => 'O campo telefone precisa ser preenchido.',
            'email.email' => 'Por favor, preencha seu e-mail com o @ e o provedor de mail que você usa.',
            'motivo_contatos_id.required' => 'O campo de Motivo Contato precisa ser selecionado.',
            'mensagem.required' => 'Por favor, digite a mensagem que gostaria de nos enviar.',
            'mensagem.max' => 'Você utilizou mais que 2000 (dois mil) caracteres. Por favor, revise a sua mensagem e utlize até no máximo 2000 (dois mil) caracteres'
        ];

        $request->validate($regras, $feedback);
        SiteContato::create($request->all());
        return redirect()->route('site.contatoConfirmado');
    }
}
