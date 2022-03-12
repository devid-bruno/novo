@extends('app.layouts.produto')
@section('titulo', 'Visualizar Clientes')
@section('conteudo')
   
    <div id="contact" class="bg-black padding-top-bottom-150px">
        <div class="container sm-container-spread">

            <div class="center-row">
                <h6 class="roboto text-weight-600 text-extra-large text-gray-light">Visualizar Clientes</h6>
                <div class="messages"></div>
                <div class="controls">
                    <div id="contact" class="bg-black padding-top-bottom-150px">
                        <div class="container sm-container-spread">
                            <table class="table table-dark">
                                <div class="center-row">
                                    <tbody>
                                        <tr>
                                            <td>Nome:</td>
                                            <td>{{$cliente->nome}}</td>
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
