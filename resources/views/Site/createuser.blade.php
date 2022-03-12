@extends('site.layouts.basico')
@extends('site.layouts._partials.footer')

@section('conteudo')

    <!--COMECO FORMULARIO-->
    <div class="padding-top-bottom-150px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 center-col text-left margin-auto">
                    <div class="container contact-wrapper">
                        <h4 class="text-weight-700 text-gray-dark title-medium">Efetue seu cadastro para concluir o
                            pedido.</h4>
                        <h6 class="text-weight-600 text-gray-dark text-large roboto">Por favor, insira corretamente seus
                            dados P/ cadastro.</h6>
                        <div class="margin-top-25px position-relative overflow-hidden width-100 page-title-smaller">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <form action="{{route('site.index')}}" action="post">
                                        @csrf
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input
                                                    class="form-control form_name no-margin-top padding-25px text-small text-gray-extra-dark text-weight-400 roboto"
                                                    type="text" name="nome" value="{{old('nome')}}" placeholder="Primeiro nome *">
                                                    {{$errors->has('nome') ? $errors->first('nome') : ''}}
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input
                                                    class="form-control form_name no-margin-top padding-25px text-small text-gray-extra-dark text-weight-400 roboto"
                                                    type="text" value="{{old('sobrenome')}}" name="sobrenome" placeholder="Sobrenome *">
                                                    {{ $errors->has('sobrenome') ? $errors->first('sobrenome') : '' }}
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input
                                                    class="form-control form_lastname no-margin-top padding-25px text-small text-gray-extra-dark text-weight-400 roboto"
                                                    type="password" name="password" placeholder="Crie sua senha *" id="senha">
                                                    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input
                                                    class="form-control form_lastname no-margin-top padding-25px text-small text-gray-extra-dark text-weight-400 roboto"
                                                    type="text" name="userinsta" value="{{old('userinsta')}}" placeholder="Informe o @ do seu insta">
                                                    {{ $errors->has('userinsta') ? $errors->first('userinsta') : '' }}
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                </div>
                                <div class="margin-top-25px row">
                                    <div class="col-md-12">
                                        <input type="submit"
                                            class="btn-send btn btn-small btn-transparent-gray-extra-dark md-margin-bottom-15px sm-margin-left-right-auto sm-display-table"
                                            value="Finalizar meu cadastro">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
