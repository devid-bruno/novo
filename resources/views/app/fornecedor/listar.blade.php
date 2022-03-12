@extends('app.layouts.fornecedor')
@section('titulo', 'Lista Fornecedores')

@section('conteudo')
    <div id="contact" class="bg-black padding-top-bottom-150px">
        <div class="container sm-container-spread">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Site</th>
                        <th scope="col">UF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <div class="center-row">
                    <tbody>
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <th scope="row">{{ $fornecedor->id }}</th>
                                <td>{{ $fornecedor->nome }}</td>
                                <td>{{ $fornecedor->site }}</td>
                                <td>{{ $fornecedor->uf }}</td>
                                <td>{{ $fornecedor->telefone }}</td>
                                <td>{{ $fornecedor->email }}</td>
                                <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                                <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">Exluir</a></td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p>Lista de Produtos</p>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($fornecedor->produtos as $key => $produto)
                                                <tr>
                                                    <th>{{$produto->id}}</th>
                                                    <th>{{$produto->NomeDrop}}</th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
            {{ $fornecedores->appends($request)->links() }}
            <br>
            {{ $fornecedores->count() }} - Total de registro por página
            <br>
            {{ $fornecedores->total() }} - Total de registro da consulta
            <br>
            {{ $fornecedores->firstItem() }} - Númeo do primeiro registro da página
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
