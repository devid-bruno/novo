@extends('site.layouts.basico')
@extends('site.layouts._partials.footer')

@section('conteudo')



<div class="padding-top-bottom-150px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 center-col text-center">
                <div class="uk-position-relative height-full" data-uk-slideshow="animation: fade">
                    <ul class="uk-slideshow-items height-100">
                        <li class="height-100">
                            <img src="{{ asset('img/blusas/branca.jpeg') }}" alt="" data-uk-cover />
                        </li>
                        <li>
                            <img src="{{ asset('img/modelwhite/model-costas.jpeg') }}" alt="" data-uk-cover />
                        </li>
                        <li>
                            <img src="{{ asset('img/modelwhite/model-white1.jpeg') }}" alt="" data-uk-cover />
                        </li>
                        <li>
                            <img src="{{ asset('img/modelwhite/model-white2.jpeg') }}" alt="" data-uk-cover />
                        </li>
                    </ul>
                    <div class="uk-position-center-right uk-position-small">
                        <ul class="uk-thumbnav uk-thumbnav-vertical">
                            <li data-uk-slideshow-item="1">
                                <a href="#">
                                    <img src="{{ asset('img/modelwhite/model-costas.jpeg') }}" width="100" alt="">
                                </a>
                            </li>
                            <li data-uk-slideshow-item="2">
                                <a href="#">
                                    <img src="{{ asset('img/modelwhite/model-white1.jpeg') }}" width="100" alt="">
                                </a>
                            </li>
                            <li data-uk-slideshow-item="3">
                                <a href="#">
                                    <img src="{{ asset('img/modelwhite/model-white2.jpeg') }}" width="100" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 center-col text-left md-margin-top-25px">
                <h4 class="text-weight-700 text-gray-dark title-medium">Camiseta </h4>
               <a href="#" class="margin-right-5px">
                   <i class="fas fa-star text-gray-light">
                       </i>
                    </a>5.0 
                    <a  href="#" class="margin-left-15px margin-right-5px">
                        <i class="fas fa-comments text-gray-light">
                            </i>
                        </a>
                        +99
                <a href="#" class="margin-left-15px margin-right-5px">
                    <i class="fas fa-heart text-gray-light">
                        </i>
                    </a>
                    +99
                <h4 class="text-weight-700 text-gray-dark title-medium margin-top-25px">R$64,90</h4>
                <form class="margin-bottom-25px">
                    <div data-uk-form-custom="target: > * > span:first-child">
                        <select class="uk-select" id="form-horizontal-select">
                            <option value="">Selecione o tamanho</option>
                            <option value="1">P</option>
                            <option value="2">M</option>
                            <option value="3">G</option>
                            <option value="4">GG</option>
                        </select>
                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                            <span></span>
                                <span data-uk-icon="icon: chevron-down"></span>
                            </button>
                    </div>
                </form>
                <div class="text-left margin-top-25px">
                    <div class="uk-form-label margin-bottom-10px text-underline">Descrição</div>
                    <p class="">Camisa 100% algodão fio 30.1 penteado; Gola ribana canelada; Estampa em serigrafia na lateral esquerda do peito(5x5) e estampa nas costas (26x26);</p>
                    <div class="separator center-col width-100 bottom-border border-1px border-color-gray-extra-light margin-top-bottom-25px">
                    </div>
                    <a class="btn btn-small btn-black sm-display-table no-margin-bottom" href="{{ route('site.createuser') }}">Fazer Pedido</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
