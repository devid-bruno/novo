<meta http-equiv="Refresh" content="10; url={{route('site.index')}}" />

@extends('site.layouts.basico')
@extends('site.layouts._partials.footer')
@section('conteudo')
<div id="contact" class="bg-black padding-top-bottom-150px">
    <div class="container sm-container-spread">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 text-center margin-auto">
                <h4 class="text-weight-700 text-gray-light title-medium">Obrigado por entrar em contato conosco!</h4>
                <p class="text-weight-400 text-gray-regular">Aguarde! Em ate 48 horas iremos entrar em contato com vc.</p>
                    <a href="{{route('site.index')}}" class="btn btn-medium btn-white sm-margin-left-right-auto sm-display-table" data-uk-toggle="target: .modal-4">Clique AQUI para ser redirecionado a página inicial!</a>
                <p class="text-weight-400 text-gray-regular">Ou, agurade 10 segundos para ser redirecionado automaticamente.</p>
                </div>
        </div>
    </div>
</div>
@endsection