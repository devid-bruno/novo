@extends('app.layouts.produto')
@section('titulo', 'Produtos Cadastrados')

@section('conteudo')
    <div id="contact" class="bg-black padding-top-bottom-150px">
        <div class="container sm-container-spread">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nome Drop</th>
                        <th scope="col">Descrição Drop</th>
                        <th scope="col">Nome do Fornecedor</th>
                        <th scope="col">Site do Fornecedor</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Unidade ID</th>
                        <th scope="col">Comprimento</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Largura</th>
                        <th scope="col">Visualizar</th>
                        <th scope="col">Editar Produto</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <div class="center-row">
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->NomeDrop }}</td>
                                <td>{{ $produto->DescricaoDrop }}</td>
                                <td>{{ $produto->fornecedor->nome }}</td>
                                <td>{{ $produto->fornecedor->site }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade_id }}</td>
                                <td>{{$produto->ItemDetalhe->comprimento ?? ''}}</td>
                                <td>{{$produto->ItemDetalhe->largura ?? ''}}</td>
                                <td>{{$produto->ItemDetalhe->altura ?? ''}}</td>
                                <td><a href="{{route('produto.show', ['produto' => $produto->id])}}">Visualizar</a></td>
                                <td><a href="{{ route('produto.edit', ['produto'=> $produto->id]) }}">Editar</a></td>
                                <td>
                                    <form method="POST" id="form_{{$produto->id}}" action="{{route('produto.destroy', ['produto' => $produto->id] )}}">
                                        @method('DELETE')
                                        @csrf   
                                       <a href="#" onclick="document.getElementById('form_{{$produto->id}}').submit('')">Excluir</a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="12">
                                    <p>Pedidos</p>
                                    @foreach ($produto->pedidos as $pedido)
                                    <a href="{{route('pedido_produto.create', ['pedido' => $pedido->id])}}">
                                        Pedido: {{$pedido->id}},
                                    </a>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
                <br>
                Exibindo {{$produtos->count()}} produtos de {{$produtos->total()}} (de {{$produtos->firstItem()}} a {{$produtos->lastItem()}})
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
