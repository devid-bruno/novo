<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/niches/fashion-01.css') }}" />
    <title>Talgs Company - @yield('titulo')</title>
</head>

<body>
<!--INICIO MENU LATERAL-->
 <div id="offcanvas-nav" data-uk-offcanvas="mode: push; overlay: true; estrue;">
     <div class="uk-offcanvas-bar menu-dark bg-black">
         <ul class="uk-nav-default uk-nav-parent-icon text-left" data-uk-nav>
             <li class="margin-top-25px">
                 <a class="uk-navbar-item uk-logo text-white text-weight-700" href="{{route('site.index')}}">TalgsCompany©</a>
             </li>
             <li class="margin-bottom-10px">
                 <a href="{{ route('site.index') }}">
                     <span class="text-gray-light text-weight-400 text-medium roboto">Home</span>
                 </a>
             </li>
             <li class="margin-bottom-10px">
                <a href="{{ route('site.contato') }}">
                    <span class="text-gray-light text-weight-400 text-medium roboto">Contato</span>
                </a>
            </li>
             <li class="uk-parent margin-bottom-10px">
                 <a href="#">
                     <span class="text-gray-light text-weight-400 text-medium roboto">Produtos</span>
                 </a>
                 <ul class="uk-nav-sub">
                     <li>
                         <a href="{{ route('site.produto') }}">1ª coleção Black & White</a>
                     </li>
                     <li>
                         <a href="">Em Breve.</a>
                     </li>
                     <li>
                         <a href="">Em Breve.</a>
                     </li>
                 </ul>
             </li>
             <li class="uk-parent margin-bottom-10px">
                <a href="#">
                    <span class="text-gray-light text-weight-400 text-medium roboto">Entrar</span>
                </a>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="{{ route('site.login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{route('site.createuser')}}">Criar Usuário</a>
                    </li>
                </ul>
            </li>
         </ul>
         <div class="nav-footer margin-top-100px margin-bottom-100px">
             <ul class="list-unstyled no-margin-bottom margin-top-100px">
                 <li class="display-inline-block margin-right-100px">
                     <a href="https://www.instagram.com/talgs.clothing">
                         <i class="fab fa-instagram instagram"></i>
                     </a>
                 </li>
             </ul>
             <p class="no-margin-bottom margin-top-20px text-small text-gray-light text-weight-400">Desenvolvido por D.B
                 acesse o
                 <a href="https://github.com/kawagone" target="_blank"> github</a>
             </p>
         </div>
     </div>
 </div>
 <!-- FIM MENU LATERAL-->

 <!-- COMEÇO MENU SITE DESKTOP-->
 <div class="z-index-999" data-uk-sticky>
     <div class="navbar-white">
         <nav class="uk-navbar-container" data-uk-navbar="boundary-align: true; align: center;">
             <div class="uk-navbar-left padding-left-four-percent">
                 <a hlass="uk-navbar-item uk-logo text-gray-dark text-weight-700" href="{{route('site.index')}}">Talgs Company</a>
             </div>

             <div class="uk-navbar-right uk-dark padding-right-four-percent">
                 <ul class="uk-navbar-nav text-weight-600">
                     <li>
                         <a class="uk-visible@l" href="{{route('site.index')}}">
                             <span class="text-weight-400 text-medium roboto">Home</span>
                         </a>
                     </li>
                     <li>
                        <a class="uk-visible@l" href="{{route('site.contato')}}">
                            <span class="text-weight-400 text-medium roboto">Contato</span>
                        </a>
                    </li>
                     <li>
                         <a class="uk-visible@l">
                             <span class="text-weight-400 text-medium roboto">Produtos</span>
                         </a>
                         <div class="bg-white" data-uk-dropdown>
                             <ul class="uk-nav uk-navbar-dropdown-nav">
                                 <li>
                                     <a href="{{ route('site.produto') }}">1ª Coleção Black & White</a>
                                 </li>
                                 <li>
                                     <a href="">Em Breve.</a>
                                 </li>
                                 <li>
                                     <a href="">Em Breve.</a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li>
                        <a class="uk-visible@l">
                            <span class="text-weight-400 text-medium roboto">Entrar</span>
                        </a>
                        <div class="bg-white" data-uk-dropdown>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li>
                                    <a href="{{ route('site.login') }}">Login</a>
                                </li>
                                <li>
                                    <a href="createuser">Criar Usuário</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                     <li>
                         <div class="uk-navbar-right uk-hidden@l">
                             <a class="uk-navbar-toggle" data-uk-navbar-toggle-icon
                                 data-uk-toggle="target: #offcanvas-nav"></a>
                         </div>
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
 </div>
 <!--FIM MENU DESKTOP -->
    @yield('conteudo')

    @yield('footer')
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/cep.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script>
        $("#telefone").mask("(99) 9 9999-9999");
    </script>
</html>
