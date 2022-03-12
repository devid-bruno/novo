<!--PRODUTO -->
@extends('site.layouts.basico')
@extends('site.layouts._partials.footer')

@section('conteudo')



    <!-- Shop -->
    <div class="padding-top-bottom-150px">
        <div class="container sm-container-spread">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 center-col text-center margin-auto">
                    <h4 class="text-weight-700 text-gray-dark title-medium">Produtos Em Estoque</h4>
                    <p class="text-weight-400">Apesar Produtos em estoque pronta entrega</p>
                </div>
            </div>
            <div class="margin-top-75px">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 margin-bottom-75px text-center">
                        <div class="img">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <a href="{{ route('site.vendas') }}">
                                    <img src="{{ asset('img/blusas/branca.jpeg') }}" />
                                </a>
                                <div class="uk-card-badge uk-label text-small padding-10px bg-gray-dark margin-right-50px">
                                    Novo</div>
                                <div class="uk-transition-fade uk-position-bottom text-white bg-black height-20">
                                    <div class="uk-position-center text-center">
                                        <a href="#" class="margin-right-5px text-extra-large">
                                            <i class="fas fa-star text-gray-light"></i></a>5.0
                                        <a href="#" class="margin-left-25px margin-right-5px text-extra-large">
                                            <i class="fas fa-comments text-gray-light"></i></a>+99
                                        <a href="#" class="margin-left-25px margin-right-5px text-extra-large"><i
                                                class="fas fa-heart text-red"></i></a>+99
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-extra-large roboto margin-top-25px text-weight-700 text-gray-dark">
                            <a class="text-weight-700 text-gray-dark" href="{{ route('site.vendas') }}">Camiseta Branca
                                B/W</a>
                        </p>
                        <h6 class="roboto margin-top-25px text-weight-600 text-extra-large text-gray-dark">R$ 64,90</h6>
                        <a class="btn btn-small btn-transparent-black sm-margin-left-right-auto sm-display-table xs-no-margin-bottom"
                            href="{{ route('site.vendas') }}">Quero ficar no Style de White!</a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 margin-bottom-75px text-center">
                        <div class="img">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <a href="{{ route('site.vendasblack') }}"><img
                                        src="{{ asset('img/blusas/preta.jpeg') }}" /></a>
                                <div class="uk-card-badge uk-label text-small padding-10px bg-gray-dark margin-right-50px">
                                    Novo
                                </div>
                                <div class="uk-transition-fade uk-position-bottom text-white bg-black height-20">
                                    <div class="uk-position-center text-center">
                                        <a href="#" class="margin-right-5px text-extra-large">
                                            <i class="fas fa-star text-gray-light"></i></a>5.0
                                        <a href="#" class="margin-left-25px margin-right-5px text-extra-large">
                                            <i class="fas fa-comments text-gray-light"></i></a>+99
                                        <a href="#" class="margin-left-25px margin-right-5px text-extra-large">
                                            <i class="fas fa-heart text-red"></i></a>+99
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-extra-large roboto margin-top-25px text-weight-700 text-gray-dark">
                            <a class="text-weight-700 text-gray-dark" href="{{ route('site.vendasblack') }}">Camiseta Preta
                                B/W</a>
                        </p>
                        <h6 class="roboto margin-top-25px text-weight-600 text-extra-large text-gray-dark">R$64,90</h6>
                        <a class="btn btn-small btn-transparent-black sm-margin-left-right-auto sm-display-table xs-no-margin-bottom"
                            href="{{ route('site.vendasblack') }}">Quero ficar no Style de Black!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-->
    <!--end-footer-->
@endsection
