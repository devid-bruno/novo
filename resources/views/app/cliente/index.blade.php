@extends('app.layouts.produto')
@section('titulo', 'Cliente')

@section('conteudo')

    <div id="contact" class="bg-black padding-top-bottom-150px">
        <div class="container sm-container-spread">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>   
                </thead>
                <div class="center-row">
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td><a href="{{route('cliente.show', ['cliente' => $cliente->id])}}">Visualizar</a></td>
                                <td>
                                    <form method="POST" id="form_{{$cliente->id}}" action="{{route('cliente.destroy', ['cliente' => $cliente->id] )}}">
                                        @method('DELETE')
                                        @csrf   
                                       <a href="#" onclick="document.getElementById('form_{{$cliente->id}}').submit('')">Excluir</a>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('cliente.edit', ['cliente'=> $cliente->id]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
                <br>
                Exibindo {{$clientes->count()}} clientes de {{$clientes->total()}} (de {{$clientes->firstItem()}} a {{$clientes->lastItem()}})
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
