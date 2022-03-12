@extends('app.layouts.produto')
@section('titulo', 'Visualizar Produtos')
@section('conteudo')
    <div id="contact" class="bg-black padding-top-bottom-150px">
        <div class="container sm-container-spread">

            <div class="center-row">
                <h6 class="roboto text-weight-600 text-extra-large text-gray-light">Visualizar Produtos</h6>
                <div class="messages"></div>
                <div class="controls">
                    <div id="contact" class="bg-black padding-top-bottom-150px">
                        <div class="container sm-container-spread">
                            <table class="table table-dark">
                                <div class="center-row">
                                    <tbody>
                                        <tr>
                                            <td>ID:</td>
                                            <td>{{$produto->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nome:</td>
                                            <td>{{$produto->NomeDrop}}</td>
                                        </tr>
                                        <tr>
                                            <td>Descrição:</td>
                                            <td>{{$produto->DescricaoDrop}}</td>
                                        </tr>
                                        <tr>
                                            <td>Peso:</td>
                                            <td>{{$produto->peso}}</td>
                                        </tr>
                                        <tr>
                                            <td>Unidade de Medida:</td>
                                            <td>{{$produto->unidade_id}}</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
