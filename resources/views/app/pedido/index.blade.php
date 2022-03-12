@extends('app.layouts.produto')
@section('titulo', 'Listagem de Pedidos')

@section('conteudo')

    <div id="contact" class="bg-black padding-top-bottom-150px">
        <div class="container sm-container-spread">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID do Pedido</th>
                        <th>Cliente</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>   
                </thead>
                <div class="center-row">
                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td>{{ $pedido->id }}</td>
                                <td>{{ $pedido->cliente_id }}</td>
                                <td><a href="{{route('pedido_produto.create', ['pedido' => $pedido->id])}}">Adicionar Produtos</a></td>
                                <td><a href="{{route('pedido.show', ['pedido' => $pedido->id])}}">Visualizar</a></td>
                                <td>
                                    <form method="POST" id="form_{{$pedido->id}}" action="{{route('pedido.destroy', ['pedido' => $pedido->id] )}}">
                                        @method('DELETE')
                                        @csrf   
                                       <a href="#" onclick="document.getElementById('form_{{$pedido->id}}').submit('')">Excluir</a>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('pedido.edit', ['pedido'=> $pedido->id]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
                <br>
                Exibindo {{$pedidos->count()}} pedidos de {{$pedidos->total()}} (de {{$pedidos->firstItem()}} a {{$pedidos->lastItem()}})
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
