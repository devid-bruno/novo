@extends('app.layouts.fornecedor')
@section('titulo', 'Fornecedores cadastrados')
    
@section('conteudo')
<div id="contact" class="bg-black padding-top-bottom-150px">
    <div class="container sm-container-spread">
        
        <div class="center-row" >
            <form class="contact-form" method="post" action="{{ route('app.fornecedor.listar') }}">
                @csrf
                <h6 class="roboto text-weight-600 text-extra-large text-gray-light">Ficha para consulta de Fornecedor</h6>
                <div class="messages"></div>
                <div class="controls">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                 <input class="form-control form_name bg-transparent no-border-top no-border-left no-border-right  border-color-gray-dark border-2px no-margin-top padding-10px text-small text-white text-weight-400" type="text" value="{{ old('nome') }}" name="nome" placeholder="Nome Empresa *">
                                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input
                                    class="form-control form_email bg-transparent no-border-top no-border-left no-border-right border-color-gray-dark border-2px padding-10px text-small text-white text-weight-400"
                                    type="text" value="{{ old('site') }}" name="site" placeholder="Site Empresa *"
                                    >
                                    {{ $errors->has('site') ? $errors->first('site') : '' }}
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input
                                    class="form-control form_phone bg-transparent no-border-top no-border-left no-border-right border-color-gray-dark border-2px padding-10px text-small text-white text-weight-400"
                                    type="text" value="{{ old('telefone') }}" name="telefone" id="telefone"
                                    placeholder="Telefone com DDD *"
                                    >
                                    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input
                                    class="form-control form_email bg-transparent no-border-top no-border-left no-border-right border-color-gray-dark border-2px padding-10px text-small text-white text-weight-400"
                                    type="text" value="{{ old('uf') }}" name="uf" placeholder="Uniadade de Federação (UF) *"
                                    >
                                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}

                                    <input
                                    class="form-control form_email bg-transparent no-border-top no-border-left no-border-right border-color-gray-dark border-2px padding-10px text-small text-white text-weight-400"
                                    type="text" value="{{ old('email') }}" name="email" placeholder="Email Empresa *"
                                    >
                                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-12" >
                            <input type="submit" class="btn-send btn btn-small btn-white  sm-display-table" value="pesquisar">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection