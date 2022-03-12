@extends('app.layouts.produto')
@section('titulo', 'Adicionar Produtos ao Pedido')
@section('conteudo')
<div id="about" class="padding-top-bottom-150px">
    <div class="container sm-container-spread">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 center-col text-right margin-auto sm-text-center">
<div>
<div>
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6 text-right margin-bottom-50px md-text-center">
        <div class="bg-transparent no-padding-bottom">
            <h4 class="text-weight-700 text-gray-dark title-medium">Detalhes do Pedido </h4>
            <p class="text-extra-large roboto margin-top-25px text-weight-700 text-gray-dark">
                ID do pedido: {{$pedido->id}} </p>
            <p class="text-extra-large roboto margin-top-25px text-weight-700 text-gray-dark">
            Cliente: {{$pedido->cliente_id}}
            
            </p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> 
            <h4>Itens do Pedido</h4>
            <table class="table table-dark">
                <div class="center-row">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do produto</th>
                        <th>Data de Inclusão do Item no Pedido</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedido->produtos as $produto)
                    <tr>
                        <td>{{$produto->id}}</td>
                        <td>{{$produto->NomeDrop}}</td>
                        <td>{{$produto->pivot->created_at->format('d/m/Y')}}</td>
                        <td>
                            <form id="form_{{$produto->pivot->id}}" method="POST" action="{{route('pedido_produto.destroy', ['pedidoProduto' => $produto->pivot->id, 'pedido_id' => $pedido->id])}}">
                                @method('DELETE')
                                @csrf
                            <a href="#" onclick="document.getElementById('form_{{$produto->pivot->id}}').submit()">Excluir</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            </div>
@component('app.pedido_produto._components.form_create', ['pedido' => $pedido, 'produtos' => $produtos])
    @endcomponent
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
