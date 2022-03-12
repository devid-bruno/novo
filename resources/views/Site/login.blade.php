@extends('site.layouts.basico')
@section('titulo', $titulo)
    

@extends('site.layouts._partials.footer')

<!--INDEX-->

@section('conteudo')


<div class="padding-top-bottom-150px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 center-col text-left margin-auto">
                    <div class="container contact-wrapper">
                        <h4 class="text-weight-700 text-gray-dark title-medium">Login.</h4>
                        <h6 class="text-weight-600 text-gray-dark text-large roboto">Efetue seu login</h6>
                        <form action={{route('site.login')}} method="POST" class="margin-top-25px contact-form">
                           @csrf
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group" >
                                         <input value="{{old('usuario')}}" class="form-control form_name no-margin-top padding-25px text-small text-gray-extra-dark text-weight-400 roboto" type="text" name="usuario" placeholder="Usuário">
                                         {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}   
                                         <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input value="{{old('senha')}}" class="form-control form_name no-margin-top padding-25px text-small text-gray-extra-dark text-weight-400 roboto" type="password" name="senha" placeholder="Senha">
                                            {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="uk-form-controls uk-form-controls-text text-left">
                                            <label>
                                                <input class="uk-radio" type="radio" name="radio1">Remember Me.
                                            </label>
                                                <br>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="margin-top-25px row">
                                    
                                    <div class="col-md-12">
                                        <input type="submit" class="btn-send btn btn-small btn-transparent-gray-extra-dark md-margin-bottom-25px sm-display-table" value="Log in">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <p class="no-margin-bottom">
                                            <a href="#" class="text-underline text-black"> Esqueceu sua senha?</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{isset($erro) &&  $erro != '' ? $erro : ''}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection