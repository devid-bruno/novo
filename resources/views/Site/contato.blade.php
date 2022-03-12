@extends('site.layouts.basico', ['motivo_contatos' => $motivo_contatos])
@extends('site.layouts._partials.footer')

@section('conteudo')



    <div id="contact" class="bg-black padding-top-bottom-150px">
        <div class="container sm-container-spread">
            <div class="center-row" >
                <form class="contact-form" method="post" action="{{ route('site.contato') }}">
                    @csrf
                    <h6 class="roboto text-weight-600 text-extra-large text-gray-light">Ficha para entrar em
                        contato.</h6>
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input
                                        class="form-control form_name bg-transparent no-border-top no-border-left no-border-right border-color-gray-dark border-2px no-margin-top padding-10px text-small text-white text-weight-400"
                                        type="text" value="{{ old('nome') }}" name="nome" placeholder="Seu nome*"
                                        >
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
                                        type="text" value="{{ old('email') }}" name="email" placeholder="E-mail *"
                                        >
                                        {{ $errors->has('email') ? $errors->first('email') : '' }}
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
                            <div class="form-group">
                                <form class="margin-bottom-25px">
                                    <div data-uk-form-custom="target: > * > span:first-child">
                                        <select class="uk-select" name="motivo_contatos_id" id="motivo_contatos_id">
                                            <option value="">Selecione o motivo de contato</option>
                                            @foreach ($motivo_contatos as $key => $motivo_contato)
                                                <option value="{{ $motivo_contato->id }}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}> {{ $motivo_contato->motivo_contato }}</option>
                                            @endforeach
                                        </select>
                                        {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}
                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                            <span> </span>
                                            <span data-uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control form_message bg-transparent no-border-top no-border-left no-border-right border-color-gray-dark border-2px padding-10px text-small text-white text-weight-400" type="text" name="mensagem">{{ old('mensagem') != '' ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
                                    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
                                </div>
                            </div>
                            <div class="col-md-12" >
                                <input type="submit" class="btn-send btn btn-small btn-white  sm-display-table" value="Enviar">
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



