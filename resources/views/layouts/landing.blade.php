<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>{{ trans('NetoCafé') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>NETOCAFÉ</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">{{ trans('Inicio') }}</a></li>
                <li><a href="#showcase" class="smoothScroll">{{ trans('Galeria') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('Iniciar Sesión') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('Registrar') }}</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1><b><a href="https://github.com/dimafrapa/proyectoNetoCoffe">NETOCAFÉ</a></b></h1>
                <h3><a href="{{ url('/register') }}" class="btn btn-lg btn-success">{{ trans('Iniciar') }}</a></h3>
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <img class="img-responsive" src="{{ asset('/img/dashboard.png') }}" alt="">
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->

<section id="showcase" name="showcase"></section>
<div id="showcase">
    <div class="container">
        <div class="row">
            <h1 class="centered">{{ trans('Galería de Fotos') }}</h1>
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('/img/item-01.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/item-02.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/item-03.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/item-04.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/item-05.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/item-06.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!-- /container -->
</div>


<div id="c">
    <div class="container">
        <p>
            <a></a><b>Descripción:</b></a>. {{ trans('El mejor lugar para vivir momentos especiales, en compañía de familia y amigos.') }}<br/>
            <a></a><b>Dulcinea</b></a>. {{ trans('Calle 7 - Carrera 7 #7-01 Esquina Filandia') }}.<br/>
            <a></a><b>E-Mail:</b></a>. {{ trans('dulcineacafebar77@gmail.com') }}.<br/>
            <a></a><b>Teléfono:</b></a>. {{ trans('318 2200693') }}.<br/>
            <a></a><b>Horario:</b></a>. {{ trans('8:00 - 22:00') }}.<br/>
            <a></a><b>Bar · Cafetería</b></a><br/>

        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
