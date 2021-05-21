<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>El Camino que creas</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/png">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="../assets/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="../assets/css/LineIcons.css">

    <!--====== Bootstrap CSS ======-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="../assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/main.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <script src="https://kit.fontawesome.com/015cfc4544.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body class="scrollbar scrollbar-night-fade">
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div id="preloader" class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
     
        </div>

    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">

        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">

                <div class="col-md-5" id="navbarTwo">
                    <ul class="navbar-nav ">
                        <li class="nav-item float-left">
                            <a class="navbar-caption " href="/"><i class="fas fa-home"></i> Inicio</a>
                        </li>

                        <li class="nav-item float-left d-none d-sm-none d-md-block">

                            <div class="btn-group">
                                <a type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-file-alt"></i> Informes
                                </a>
                                <div class="dropdown-menu  shape" style="flex-direction: column; background: linear-gradient(180deg, rgba(94, 125, 212, 0.65), rgba(157, 168, 222, 0.65));">

                                    <div class="row pb-3" style="min-width: 700px;">
                                        <div class="col-5 border-right  border-dark mt-5">

                                            <ul class="navbar-nav " style="flex-direction: column; ">

                                                <li id="1" class="nav-item" onmouseover="navbarChange(this)" onclick="navbarChange(this)">
                                                    <a class="nav-link active">Revolución Solar</a>
                                                </li>

                                                <li id="2" class="nav-item" onmouseover="navbarChange(this)" onclick="navbarChange(this)">
                                                    <a class="nav-link">Revolución lunar</a>
                                                </li>

                                                <!--   <li id="3" class="nav-item" onmouseover="navbarChange(this)"
                                                    onclick="navbarChange(this)">
                                                    <a class="nav-link ">Carta Natal</a>
                                                </li>-->



                                            </ul>
                                        </div>

                                        <div class="col-7">
                                            <div class="card-body nav-card ">
                                                <ul class="nav flex-column ">
                                                    <li class="nav-item"><a href="{{ route('informe', 'primordial solar') }}" class="nav-link"><img class="svg-menu" src="../assets/svg/moon-star.svg">PRIMORDIAL</a></li>
                                                    <!-- <li class="nav-item"><a class="nav-link"><img class="svg-menu" src="../assets/svg/moon-star.svg"> Arco de Casa II</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"><img class="svg-menu" src="../assets/svg/galaxy1.svg"> Regentes I</a></li>
                                                    <li class="nav-item"><a class="nav-link"><img class="svg-menu" src="../assets/svg/commet.svg"> Regentes II</a></li>
                                                    <li class="nav-item"><a class="nav-link"><img class="svg-menu" src="../assets/svg/galaxy2.svg"> Cuspides</a></li>-->
                                                </ul>

                                            </div>

                                            <div class="card-body nav-card d-md-none">
                                                <ul class="nav flex-column ">
                                                    <!--                                                    <li class="nav-item"><a class="nav-link">Arco </a></li>
                                                    <li class="nav-item"><a class="nav-link">Regentes I</a></li>
                                                    <li class="nav-item"><a class="nav-link">Regentes II</a></li>
                                                    <li class="nav-item"><a class="nav-link">Cuspides</a></li>-->
                                                </ul>
                                            </div>

                                            <div class="card-body nav-card d-md-none">
                                                <ul class="nav flex-column ">
                                                    <li class="nav-item  "><a class="nav-link card-item-a"><img class="svg-menu" src="../assets/svg/moon-star.svg">
                                                            Comportamiento</a></li>
                                                    <li class="nav-item  "><a class="nav-link card-item-a"><img class="svg-menu" src="../assets/svg/galaxy1.svg">
                                                            Informe
                                                            Harrington</a></li>
                                                    <li class="nav-item  "><a class="nav-link card-item-a"><img class="svg-menu" src="../assets/svg/commet.svg">
                                                            Informe
                                                            Waldemath Lilith</a></li>
                                                    <li class="nav-item  "><a class="nav-link card-item-a"><img class="svg-menu" src="../assets/svg/galaxy2.svg">
                                                            Informe
                                                            Lilith</a></li>
                                                    <li class="nav-item  "><a class="nav-link card-item-a"><img class="svg-menu" src="../assets/svg/moon-star.svg">
                                                            Informe
                                                            Marte</a></li>
                                                    <li class="nav-item  "><a class="nav-link card-item-a"><img class="svg-menu" src="../assets/svg/galaxy1.svg">
                                                            Informe
                                                            Venus</a></li>
                                                    <li class="nav-item  "><a class="nav-link card-item-a"><img class="svg-menu" src="../assets/svg/commet.svg">
                                                            Informe
                                                            Academia</a></li>
                                                    <li class="nav-item  "><a class="nav-link card-item-a"><img class="svg-menu" src="../assets/svg/galaxy2.svg">
                                                            Informe
                                                            Urania</a></li>
                                                    <li class="nav-item  "><a class="nav-link card-item-a"> <img class="svg-menu" src="../assets/svg/moon-star.svg">
                                                            Informe
                                                            Leverrier</a></li>
                                                    <li class="nav-item  "><a class="nav-link card-item-a"> <img class="svg-menu" src="../assets/svg/galaxy1.svg">
                                                            Informe
                                                            Represión Infantil</a></li>
                                                    <li class="nav-item  "><a class="nav-link card-item-a"> <img class="svg-menu" src="../assets/svg/commet.svg">
                                                            Informe
                                                            Pluton</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item float-left d-block d-md-none">
                            <div id="accordion">
                                <div class="card movil-nav">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Revolicón Lunar
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body ">
                                            <ul class="nav flex-column ">
                                                <li class="nav-item"><a class="nav-link"> Arco de Casa II</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link">Regentes I</a></li>
                                                <li class="nav-item"><a class="nav-link">Regentes II</a></li>
                                                <li class="nav-item"><a class="nav-link">Cuspides</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card movil-nav">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Revolución Solar
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="nav flex-column ">
                                                <li class="nav-item"><a class="nav-link"> Arco de Casa II</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link"> Regentes I</a></li>
                                                <li class="nav-item"><a class="nav-link"> Regentes II</a></li>
                                                <li class="nav-item"><a class="nav-link"> Cuspides</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card movil-nav">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Carta Natal
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="nav flex-column ">
                                                <li class="nav-item  "><a class="nav-link card-item-a">
                                                        Comportamiento</a></li>
                                                <li class="nav-item  "><a class="nav-link card-item-a">
                                                        Informe
                                                        Harrington</a></li>
                                                <li class="nav-item  "><a class="nav-link card-item-a">
                                                        Informe
                                                        Waldemath Lilith</a></li>
                                                <li class="nav-item  "><a class="nav-link card-item-a">
                                                        Informe
                                                        Lilith</a></li>
                                                <li class="nav-item  "><a class="nav-link card-item-a">
                                                        Informe
                                                        Marte</a></li>
                                                <li class="nav-item  "><a class="nav-link card-item-a"> Informe
                                                        Venus</a></li>
                                                <li class="nav-item  "><a class="nav-link card-item-a">
                                                        Informe
                                                        Academia</a></li>
                                                <li class="nav-item  "><a class="nav-link card-item-a">
                                                        Informe
                                                        Urania</a></li>
                                                <li class="nav-item  "><a class="nav-link card-item-a">
                                                        Informe
                                                        Leverrier</a></li>
                                                <li class="nav-item  "><a class="nav-link card-item-a">
                                                        Informe
                                                        Represión Infantil</a></li>
                                                <li class="nav-item  "><a class="nav-link card-item-a">
                                                        Informe
                                                        Pluton</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="d-none d-sm-none d-md-block col-md-2 justify-content-center">
                    <img src="../assets/images/logo.png" width="50%" sizes="220px" style="margin-right: auto; margin-left: auto; display: block;">
                </div>

                <div class="col-5 justify-content-center" id="navbarTwo">
                    <ul class="navbar-nav m-auto">

                        <li class="nav-item"><input type="search" class="searchinput" placeholder="Buscar"><i class="fas fa-search fa-lg text-white"></i></li>
                        <div class="dropdown show ">
                            <li class="mr-3 ml-3" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="login" class="text-white"><i class="fas fa-user fa-lg text-white"></i> @isset(auth()->user()->name) {{Auth::user()->name}} @endisset</a></li>
                            <div class="dropdown-menu shape" style="flex-direction: column; background: linear-gradient(180deg, rgba(94, 125, 212, 0.65), rgba(157, 168, 222, 0.65));" aria-labelledby="dropdownMenuLink">
                                <ul class="navbar-nav " style="flex-direction: column; ">
                                    <li class="nav-item">
                                        <a class="text-white   pt-4 pb-0" href="/inicio">Inicio</a>
                                    </li>
                                    @if(Auth::check())
                                    <li class="nav-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </li>

                                    @else
                                    <li class="nav-item">
                                        <a href="login" class="text-white   pt-4 pb-0" href="#">login</a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </ul>
                </div>


            </nav> <!-- navbar -->
        </div>
    </section>

    @yield('content')

    <!--====== FOOTER PART START ======-->

    <section class="footer-area bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">

                    <ul class="social text-center ">
                        <li><a href="https://facebook.com/"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/"><i class="lni lni-instagram-original"></i></a></li>

                    </ul> <!-- social -->

                    <ul class="social text-center mt-3">
                        <li><a href="#">SUSCRIPCIÓN</a></li>
                        <li><a href="#">CONTACTO</a></li>
                        <li><a href="#">PRIVACIDAD</a></li>
                        <li><a href="#">RECLAMO</a></li>
                        <li><a href="https://bhdzit.github.io/" style="font-size: unset;">DESAROLLADOR</a></li>

                    </ul> <!-- social -->


                    <div class="copyright text-center mt-3">
                        <sub class="text">© 2020 El Camino Que Creas. Todos los derechos están reservados.</sub>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>





    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="../assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="../assets/js/ajax-contact.js"></script>

    <!--====== Isotope js ======-->
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/scrolling-nav.js"></script>

    <!--====== Main js ======-->
    <script src="../assets/js/main.js"></script>
    @yield('script')
</body>

</html>