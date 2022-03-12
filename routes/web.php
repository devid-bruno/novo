<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutoDetalheController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index')->middleware('log.acesso');
Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/produto', function(){ return view('site.produto');})->name('site.produto');

Route::get('/confirmado', function(){ return view('site.contatoConfirmado'); })->name('site.contatoConfirmado');

Route::get('/vendas', function(){ return view('site.vendas'); })->name('site.vendas');

Route::get('/vendasblack', function(){ return view('site.vendasblack'); })->name('site.vendasblack');

Route::get('/createuser', function(){ return view('site.createuser'); })->name('site.createuser');

Route::get('/login/{erro?}', [\App\Http\Controllers\LoginController::class, 'index'])->name('site.login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'autenticar'])->name('site.login');


Route::get('/createuser/{erro?}', [\App\Http\Controllers\UsuarioLogin::class, 'index'])->name('site.createuser');
Route::post('/createuser', [\App\Http\Controllers\UsuarioLogin::class, 'autenticar'])->name('site.createuser');


Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function(){
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('app.home');
    Route::get('/sair', [\App\Http\Controllers\LoginController::class, 'sair'])->name('app.sair');
    Route::get('/cliente', [\App\Http\Controllers\ClienteController::class, 'index'])->name('app.cliente');
    
    Route::get('/fornecedor', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedor');
    Route::post('/fornecedor/listar', [\App\Http\Controllers\FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/listar', [\App\Http\Controllers\FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar', [\App\Http\Controllers\FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar', [\App\Http\Controllers\FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    Route::get('/fornecedor/editar/{id}/{msg?}', [\App\Http\Controllers\FornecedorController::class, 'editar'])->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}', [\App\Http\Controllers\FornecedorController::class, 'excluir'])->name('app.fornecedor.excluir');
    
   //produto
    Route::resource('produto', ProdutoController::class);
    //produto-detalhe
    Route::resource('produto-detalhe', ProdutoDetalheController::class);

    Route::resource('cliente', ClienteController::class);
    Route::resource('pedido', PedidoController::class);
    //Route::resource('pedido-produto', PedidoProdutoController::class);
    Route::get('pedido_produto/create/{pedido}', [\App\Http\Controllers\PedidoProdutoController::class, 'create'])->name('pedido_produto.create');
    Route::post('pedido_produto/store/{pedido}', [\App\Http\Controllers\PedidoProdutoController::class, 'store'])->name('pedido_produto.store');
    //Route::delete('pedido_produto.destroy/{pedido}/{produto}', [\App\Http\Controllers\PedidoProdutoController::class, 'destroy'])->name('pedido_produto.destroy');
    Route::delete('pedido_produto.destroy/{pedidoProduto}/{pedido_id}', [\App\Http\Controllers\PedidoProdutoController::class, 'destroy'])->name('pedido_produto.destroy');
});


Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');


Route::fallback(function(){
    echo 'A página acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir á página inicial.';
});

