<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\SiteContato;
use Carbon\Factory;
use Database\Factories\SiteContatoFactory;
use Database\Factories\UserFactory;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        /*
        $contato = New SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(11) 9 9999-8888';
        $contato->email = 'sistemasg@contato.com';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja Bem-vindo ao Projeto Sistema Super Gestão!';
        $contato->save();
        */
        
        \App\Models\SiteContato::factory()->count(100)->create();
    }
}
