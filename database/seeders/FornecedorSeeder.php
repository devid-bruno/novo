<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'fornecedor100@contato.com.br';
        $fornecedor->save();

        //utilizando o método create !!ATENCAO!! na variavel fillable no model
        Fornecedor::create(['nome'=>'Fornecedor 101', 'site'=>'fornecedor101.com.br', 'uf'=>'SP', 'email'=> 'fornecedor101@contato.com.br']);

        //fazendo um insert into no banco de dados diretamente pela seeder
        DB::table('fornecedores')->insert(['nome'=>'Fornecedor 102', 'site'=>'fornecedor102.com.br', 'uf'=>'RS', 'email'=> 'fornecedor102@contato.com.br']);
    }
}
