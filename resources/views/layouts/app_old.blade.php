<!DOCTYPE html>
<html lang="en">

<head>
    <title>Altcel 2 - Te Conectamos al mundo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="{{asset('plantilla/js/jquery.min.js')}}"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('plantilla/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('plantilla/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('plantilla/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('plantilla/css/magnific-popup.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/christmas.css')}}"> -->


    <link rel="stylesheet" href="{{asset('plantilla/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('plantilla/css/jquery.timepicker.css')}}">

    <!-- MODIV LALO -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->

    <!-- <link rel="stylesheet" href="css/flaticon.css"> -->
    <link rel="stylesheet" href="{{asset('plantilla/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('plantilla/css/cart.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('slider/css/flexslider.css')}}" type="text/css" media="screen" />
    <script src="{{asset('plantilla/js/jquery.min.js')}}"></script>
    <script src="{{asset('slider/js/modernizr.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        /* @media screen and (max-width: 770px) {
        #logo-home {
                width: 30% !important;
            }
        }

        @media screen and (max-width: 500px) {
        #logo-home {
                width: 50% !important;
            }
        } */

        .opps {
            width: 496px; 
            border-radius: 4px;
            box-sizing: border-box;
            padding: 0 45px;
            margin: 40px auto;
            overflow: hidden;
            border: 1px solid #b0afb5;
            font-family: 'Open Sans', sans-serif;
            color: #4f5365;
        }

        .opps-reminder {
            position: relative;
            top: -1px;
            padding: 9px 0 10px;
            font-size: 11px;
            text-transform: uppercase;
            text-align: center;
            color: #ffffff;
            background: #000000;
        }

        .opps-info {
            margin-top: 26px;
            position: relative;
        }

        .opps-info:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;

        }

        .opps-brand {
            width: 45%;
            float: left;
        }

        .opps-brand img {
            max-width: 150px;
            margin-top: 2px;
        }

        .opps-ammount {
            width: 55%;
            float: right;
        }

        .opps-ammount h2 {
            font-size: 36px;
            color: #000000;
            line-height: 24px;
            margin-bottom: 15px;
        }

        .opps-ammount h2 sup {
            font-size: 16px;
            position: relative;
            top: -2px
        }

        .opps-ammount p {
            font-size: 10px;
            line-height: 14px;
        }

        .opps-reference {
            margin-top: 14px;
        }

        .referenceOxxoCard {
            font-size: 27px;
            color: #000000;
            text-align: center;
            margin-top: -1px;
            padding: 6px 0 7px;
            border: 1px solid #b0afb5;
            border-radius: 4px;
            background: #f8f9fa;
        }

        .opps-instructions {
            margin: 32px -45px 0;
            padding: 32px 45px 45px;
            border-top: 1px solid #b0afb5;
            background: #f8f9fa;
        }

        .instructions {
            margin: 17px 0 0 16px;
        }

        .search-oxxo {
            color: #1155cc;
        }

        .opps-footnote {
            margin-top: 22px;
            padding: 22px 20 24px;
            color: #108f30;
            text-align: center;
            border: 1px solid #108f30;
            border-radius: 4px;
            background: #ffffff;
        }

        .glow {
            animation: glowing 1000ms infinite;
            border-radius: 5px;
        }

        @keyframes glowing {
            0% { box-shadow: 0 0 20px -10px #54aedba6;}
            40% { box-shadow: 0 0 10px 10px #54aedba6;}
            60% { box-shadow: 0 0 10px 10px #54aedba6;}
            100% { box-shadow: 0 0 20px -10px #54aedba6;}
        }

    </style>
</head>

<body>

    <div class="wrap">
        <div class="container">
            <div class="row mov_med">
                <!-- <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="tel://9616177800" class="mr-2"><span class="fa fa-phone mr-1"></span> 961 617 7800</a>
                        <a href="tel://8002258235" class="mr-2"><span class="fa fa-phone mr-1"></span> 800 2 ALTCEL(258235)</a>
                        <a href="#"><span class="fa fa-paper-plane mr-1"></span>contacto@altcel2.com</a>
                    </p>
                </div> -->
                <!--
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <a href="http://200.106.172.56/login" class="mr-2 text-white"> Iniciar Sesi??n</a>
                        <a href="http://200.106.172.56/register" class="mr-2 text-white"> Reg??strate</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light nav_bar" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand img_mov" href="{{ url('/') }}"  id="logo-home"><img class="enlaces__mov" src="{{asset('plantilla/images/logoAltcel2.png')}}"
                    style="width:100%;" alt=""></a>
            <button id="barra__burt2" class="navbar-toggler barra__burt" type="button" data-toggle="collapse" data-target="#ftco-nav" onClick="animacion()"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> 
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto mov_nav__enl">
                 @guest
                    <li class="enlaces__mov1 nav-item {{(request () -> is ('my-conecta*'))? 'active': ''}}"><a href="{{url('/my-conecta')}}" class="nav-link"><p class="glow" style="margin-bottom: 0rem;">RECARGA</p></a></li>
                    <li class="enlaces__mov1 nav-item {{(request () -> is ('contact*'))? 'active': ''}}"><a href="{{url('/contact')}}" class="nav-link">Contacto</a></li>
                    <li class="enlaces__mov1 nav-item {{(request () -> is ('imeis*'))? 'active': ''}}"><a href="{{url('/imeis')}}" class="nav-link">Valida tu IMEI</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{url('/home')}}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/beneficios')}}">Beneficios</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/imagenes')}}">Imagenes</a></li>
                     <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                     <li class="nav-item">
                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{route('logout')}}" class="nav-link">Salir</a>
                    </li>
                @endguest
               
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    @yield('content')

    <footer class="footer">
        <div class="container container2">
            <div class="row">
                <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                    <h2 class="footer-heading">Contratos</h2>
                    <ul class="list-unstyled">
                        <li><a target="_blank" href="{{asset('legales/Contratos Autorizados/Altcel II, S.A.P.I. de C.V.!!Altcel 305-2020.pdf')}}" class="py-2 d-block">Contrato de Adhesi??n 305-2020</a></li>
                        <li><a target="_blank" href="{{asset('legales/Contratos Autorizados/Altcel II, S.A.P.I. de C.V.!!Altcel 306-2020.pdf')}}" class="py-2 d-block">Contrato de Adhesi??n 306-2020</a></li>
                        <li><a target="_blank" href="{{asset('legales/Contratos Autorizados/Altcel II, S.A.P.I. de C.V.!!Altcel II 307-2020.pdf')}}" class="py-2 d-block">Contrato de Adhesi??n 307-2020</a></li>
                        <li><a target="_blank" href="{{asset('legales/Contratos Autorizados/Altcel II, S.A.P.I. de C.V.!!Altcel II 132-2021.pdf')}}" class="py-2 d-block">Contrato de Adhesi??n 132-2021</a></li>
                        <li><a target="_blank" href="{{asset('legales/Contratos Autorizados/Altcel II, S.A.P.I. de C.V.!!Altcel II 133-2021.pdf')}}" class="py-2 d-block">Contrato de Adhesi??n 133-2021</a></li>
                        <!-- <div class="btn-group">
                          <button type="button" class="btn dropdown-toggle" style="background: #1a1a1a !important; color: white;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Folios de Tarifas
                          </button>
                          <div class="dropdown-menu">
                            <a target="_blank" class="dropdown-item" href="{{asset('legales/Convenios/IFT Concesi??n Altcel II SAPI DE CV.pdf')}}">IFT Concesi??n Altcel II SAPI DE CV</a>
                            <a target="_blank" class="dropdown-item" href="{{asset('legales/Convenios/IFT Convenio de Desagregaci??n.pdf')}}">IFT Convenio de Desagregaci??n</a>
                            <a target="_blank" class="dropdown-item" href="{{asset('legales/Convenios/IFT Convenio de Prestaci??n de Servicios (Red Mayorista).pdf')}}">IFT Convenio de Prestaci??n de Servicios</a>
                          </div>
                        </div> -->
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                    <h2 class="footer-heading">Referencias</h2>
                    <ul class="list-unstyled">
                        <li><a target="_blank" target="_blank" href="{{asset('legales/ALT-ARC-F01 FORMATO DERECHOS ARCO 2.pdf')}}" class="py-2 d-block">Formato de Derechos Arco 2</a></li>
                        <li><a target="_blank" href="{{asset('legales/Carta de Derechos Minimos de los Usuarios.pdf')}}" class="py-2 d-block">Carta de derechos m??nimos de los usuarios de los servicios p??blicos de telecomunicaciones</a></li>
                        <li><a target="_blank" href="{{asset('legales/C??DIGO DE PRACTICAS COMERCIALES ALTCEL II.pdf')}}" class="py-2 d-block">C??digo de Pr??cticas Comerciales</a></li>
						<li><a target="_blank" href="{{asset('legales/POLITICA Y CONDICIONES DE USO ALTCEL II.pdf')}}" class="py-2 d-block">Pol??ticas y Condiciones de Uso Altcel II</a></li>
						<li><a target="_blank" href="{{asset('legales/PROCEDIMIENTO PARA LA ATENCI??N DE DUDAS, QUEJAS Y ACLARACIONES.PDF')}}" class="py-2 d-block">Procedimiento para la Atenci??n de Dudas, Aclaraciones, Quejas y Reclamaciones</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                    <h2 class="footer-heading">Enlaces</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{url('/my-conecta')}}" class="py-2 d-block"><p class="glow">Recarga</p></a></li>
                        <li><a href="{{url('/')}}" class="py-2 d-block">Home</a></li>
                        <li><a href="{{url('/contact')}}" class="py-2 d-block">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading">Comp??rtenos tus dudas y/o sugerencias</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map"></span><span class="text">Calle 9?? Poniente Norte, No. 1120 Col. Vista Hermosa, Tuxtla Guti??rrez, Chiapas.</span></li>
                            <li><a href="tel://8002258235"><span class="icon fa fa-phone"></span><span class="text"> 800 2 ALTCEL(258235)</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">soporte@altcel2.com</span></a></li>
                            <li><span class="icon fa fa-envelope"></span><span class="text ml-3">Correo electr??nico para la atenci??n de requerimientos formulados por las autoridades competentes en materia de seguridad y justicia. <a href="mailto:colaboracionseguridad@altcel2.com">colaboracionseguridad@altcel2.com</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center2">
                    <p>
                        ***Folios de Registro de Tarifas ante el IFT: 373976, 373978, 397889, 374252, 397888, 397885, 405932, 405933, 405934, 405935, 405936, 405937, 405974, 405975, 405976, 405977, 405980, 405979
                    </p>
                    <p class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Altcel II SAPI de CV
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>

    
    <script src="{{asset('plantilla/js/jquery.min.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('plantilla/js/popper.min.js')}}"></script>
    <script src="{{asset('plantilla/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('plantilla/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('plantilla/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('plantilla/js/scrollax.min.js')}}"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('plantilla/js/google-map.js')}}"></script> -->
    <script src="{{asset('plantilla/js/main.js')}}"></script>


    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script> -->

  <!-- FlexSlider -->
  <script defer src="{{asset('slider/js/jquery.flexslider.js')}}"></script>

  <script type="text/javascript">

window.onscroll = function() {
    var scroll_y = window.scrollY;

    if(scroll_y >= 0){
        $('.top_img__carru').addClass('top_img__carru2');
        $('.nav_bar').addClass('fixed');
        $('.enlaces__mov').addClass('fixed_color');
        // $('.enlaces__mov1').addClass('fixed_color');
        $('.mov_nav__enl').addClass('fixed_color1');
        $('.barra__burt').addClass('fixed_color2');
        $('.ul-imagen').addClass('imgBan');
        $('.mov_top').addClass('mov_top__miConecta');
        $('.mv_top__imeis').addClass('mv_top__imeis2');
    }else{
        $('.nav_bar').removeClass('fixed');
        $('body').css({'margin-top': '0px'});

    }
};

    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="{{asset('slider/js/shCore.js')}}"></script>
  <script type="text/javascript" src="{{asset('slider/js/shBrushXml.js')}}"></script>
  <script type="text/javascript" src="{{asset('slider/js/shBrushJScript.js')}}"></script>
  <script type="text/javascript" src="{{asset('slider/js/cart.js')}}"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="{{asset('slider/js/jquery.easing.js')}}"></script>
  <script src="{{asset('slider/js/jquery.mousewheel.js')}}"></script>
  <script defer src="{{asset('slider/js/demo.js')}}"></script>
</body>

</html>