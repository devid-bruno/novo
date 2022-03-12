@extends('site.layouts.basico')
@section('titulo', $titulo)
@extends('site.layouts._partials.footer')

<!--INDEX-->

@section('conteudo')

    <div class="uk-position-relative uk-visible-toggle" data-uk-slider="finite: true">
        <ul class="uk-slider-items uk-child-width-1-2@m uk-grid uk-grid-small" data-uk-height-viewport>
            <li class="uk-transition-toggle uk-animation-toggle overflow-hidden">
                <img src="{{ asset('img/original.png') }}" alt="" data-uk-cover />
                <div class="uk-overlay-primary-dark uk-position-cover">
                    <div class="width-80 uk-position-center text-center sm-width-95">
                        <h4 class="text-weight-700 text-gray-light title-medium margin-bottom-10px">Talgs Company</h4>
                        <h6 class="roboto text-weight-600 text-extra-large text-gray-regular">Style Streetwear Fashion.</h6>
                    </div>
                </div>
            </li>
            <li class="uk-transition-toggle uk-animation-toggle overflow-hidden">
                <img src="{{ asset('img/original.gif') }}" alt="" data-uk-cover />
            </li>
        </ul>
    </div>
    <div id="about" class="padding-top-bottom-150px">
        <div class="container sm-container-spread">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 center-col text-right margin-auto sm-text-center">
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-right margin-bottom-50px md-text-center">
                                    <div class="bg-transparent no-padding-bottom">
                                        <i class="fas fa-location-arrow fa-3x fa-spin"></i>
                                        <p class="text-extra-large roboto margin-top-25px text-weight-700 text-gray-dark">
                                            Estamos localizados em Fortaleza!</p>
                                        <p class="text-extra-large roboto margin-top-25px text-weight-700 text-gray-dark">
                                            Acesse nosso <a href="https://www.instagram.com/talgs.clothing">instagram</a>
                                        </p><a href="https://www.instagram.com/talgs.clothing"><i
                                                class="fab fa-instagram fa-3x fa-flash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <p class="text-extra-large roboto margin-top-25px text-weight-700 text-gray-dark md-text-center">
        Quer ser o mais descolado do role? Então cola na Talgs!
    </p>
    <div
        class="col-lg-3 col-md-12 col-sm-12 col-xs-12 center-col text-center margin-auto md-margin-top-bottom-50px uk-flex uk-flex-middle ">

        <img src="{{ asset('img/modelwhite/model-costas.jpeg') }}" href="{{ route('site.produto') }}" />
    </div>
    <p class="text-extra-large roboto margin-top-25px text-weight-700 text-gray-dark md-text-center">
        Estilo e conforto num lugar só (além do abraço da morena, é claro!)
    </p>
    <!-- START ABOUT THE STORE, DELIVERY AND PAYMENT METHODS -->
    <div id="categories" class="bg-black">
        <div class="uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-3@l uk-text-center uk-grid-collapse"
            data-uk-grid>
            <div class="img" data-uk-lightbox="animation: fade">
                <div class="uk-inline-clip uk-transition-toggle">
                    <img src="{{ asset('img/modelblack/model-black1.jpeg') }}" />
                    <div class="uk-position-left uk-overlay-primary-dark text-center width-100">
                        <div class="margin-left-fifteen-percent margin-right-fifteen-percent">
                            <div class="uk-position-center">
                                <h4 class="text-weight-700 text-gray-light title-medium">Homens</h4>
                                <a class="btn btn-small btn-transparent-white sm-display-table sm-margin-left-right-auto xs-no-margin-bottom"
                                    href="{{ route('site.vendasblack') }}">Style brabo pra role.</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ABOUT THE STORE, DELIVERY AND PAYMENT METHODS -->
    <div id="info" class="bg-black">
        <div class="uk-grid-collapse uk-child-width-1-2@l uk-child-width-1-1@s" data-uk-grid>
            <div class="uk-flex uk-flex-middle" data-uk-height-viewport>
                <div class="container-small sm-container-spread sm-text-center">
                    <div>
                        <h4 class="roboto margin-top-25px text-weight-600 text-extra-large text-gray-light">
                            Efetuamos a entrega do seu produto pela Uber Flash.
                        </h4>
                        <p class="text-gray-regular">Em caso de dúvidas, por favor, fale conosco pelo <a
                                href="https://wa.me/+5585981219630?text=Pode%20me%20ajudar?">WhatsApp</a></p>
                        <i class="fab fa-whatsapp fa-3x fa-beat"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
