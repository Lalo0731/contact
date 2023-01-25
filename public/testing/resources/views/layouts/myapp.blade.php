<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Metronic Shop UI</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Fonts START -->
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
        rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
        rel="stylesheet" type="text/css">
    <!--- fonts for slider on the index page -->
    <!-- Fonts END -->

    <!-- Global styles START -->
    <!-- <link href="{{asset('plantillaNew/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"> -->
    <link href="{{asset('plantillaNew/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="{{asset('plantillaNew/assets/pages/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('plantillaNew/assets/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('plantillaNew/assets/plugins/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="{{asset('plantillaNew/assets/pages/css/components.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('plantillaNew/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> -->
    <link href="{{asset('plantillaNew/assets/pages/css/slider.css')}}" rel="stylesheet">
    <link href="{{asset('plantillaNew/assets/pages/css/style-shop.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('plantillaNew/assets/corporate/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('plantillaNew/assets/corporate/css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('plantillaNew/assets/corporate/css/myProgressBar.css')}}" rel="stylesheet">
    <link href="{{asset('plantillaNew/assets/corporate/css/themes/red.css')}}" rel="stylesheet" id="style-color">
    <link href="{{asset('plantillaNew/assets/corporate/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="{{asset('plantillaNew/assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <!-- Theme styles END -->

    <style>
        @media screen and (max-width: 770px) {
        #logo-home {
                width: 30% !important;
            }
        }

        @media screen and (max-width: 500px) {
        #logo-home {
                width: 50% !important;
            }
        }

        .proots-2 {
            padding: 0.5rem !important;
        }

        .text-success-roots {
            color: #04c35e !important;
        }

        .border-roots {
            border-radius: 7px !important;
        }

        .mg-roots{
            margin: 5px !important;
        }

        .mg-roots-2 {
            margin: 2rem !important;
        }

        .text-dark-roots {
            color: #3e4d5c !important;
        }

        .text-dark-roots-2 {
            color: black !important;
        }

        .text-light-roots {
            color: white !important;
        }

        .text-monserrat {
            font-family: "Montserrat", Arial, sans-serif !important;
            font-size: 18px;
            font-weight: 700;
        }

        .card-roots {
            border: solid 1px rgba(0,0,0,.125) !important;
            border-radius: 0.5rem !important;
            padding: 1.25rem !important;
            margin: 0.5rem !important;
        }

        .card-roots:hover {
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
            /* transition: box-shadow .5s; */
            transform: rotateY(180deg);
        }

        .size-roots-2 {
            font-size: 2rem;
        }

        .d-none {
            display: none !important;
        }

        .swal2-icon, .swal2-success-ring, .swal2-loader {
            border-radius: 50% !important;
        }

        .swal2-styled, .swal2-modal {
            border-radius: 7px !important;
        }

        .card-wrapper {
            display: inline-block;
            perspective: 1000px;
            padding: 0 !important;
            margin: 0.5rem !important;
        }
        .card-wrapper,
        .card {
            width: 200px;
            height: 200px;
            
        }
        .card .front,
        .card .back {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: 4px !important;
        }
        .card .front {
            color: #FC545E;
            background: #FFFFFF;
            font-weight: 700;
            font-size: 1rem;
        }
        .card .back {
            font-size: 1.5rem;
            color: #FFFFFF;
            background: #04c35e;
        }
        .card-wrapper .card {
            position: relative;
            cursor: pointer;
            transition-duration: 0.6s;
            transition-timing-function: ease-in-out;
            transform-style: preserve-3d;
        }
        .card-wrapper .card .front,
        .card-wrapper .card .back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            transform: rotateX(0deg);
        }
        .card-wrapper .card .front {
            z-index: 2;
        }
        .card-wrapper .card .back,
        .card-wrapper.flip-right .card .back {
            transform: rotateY(180deg);
        }
        .card-wrapper:hover .card,
        .card-wrapper.flip-right:hover .card {
            transform: rotateY(180deg);
        }

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
    </style>
</head>
<!-- Head END -->

<!-- Body BEGIN -->

<body class="ecommerce">

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><a href="tel://9616177800"><i class="fa-solid fa-phone"></i><span>+52 9616177800</span></a></li>
                        <li><a href="tel://8002258235"><i class="fa-solid fa-phone"></i><span>800 2 ALTCEL(258235)</span></a></li>
                        <li><a href="#"><i class="fa-solid fa-envelope"></i><span>contacto@altcel2.com</span></a></li>

                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="page-login.html">Log In</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <a class="site-logo" href="{{ url('/') }}" style="width: 15%;" id="logo-home"><img src="{{asset('plantilla/images/conecta.png')}}" style="width: 100%;" alt="Metronic Shop UI"></a>

            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

            <!-- BEGIN CART -->
            <div class="top-cart-block">
                <div class="top-cart-info">
                    <a href="javascript:void(0);" class="top-cart-info-count">3 items</a>
                    <a href="javascript:void(0);" class="top-cart-info-value">$1260</a>
                </div>
                <i class="fa fa-shopping-cart"></i>

                <div class="top-cart-content-wrapper">
                    <div class="top-cart-content">
                        <ul class="scroller" style="height: 250px;">
                            <li>
                                <a href="shop-item.html"><img src="{{asset('plantillaNew/assets/pages/img/cart-img.jpg')}}"
                                        alt="Rolex Classic Watch" width="37" height="34"></a>
                                <span class="cart-content-count">x 1</span>
                                <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                                <em>$1230</em>
                                <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                            </li>
                            <li>
                                <a href="shop-item.html"><img src="{{asset('plantillaNew/assets/pages/img/cart-img.jpg')}}"
                                        alt="Rolex Classic Watch" width="37" height="34"></a>
                                <span class="cart-content-count">x 1</span>
                                <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                                <em>$1230</em>
                                <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                            </li>
                            <li>
                                <a href="shop-item.html"><img src="{{asset('plantillaNew/assets/pages/img/cart-img.jpg')}}"
                                        alt="Rolex Classic Watch" width="37" height="34"></a>
                                <span class="cart-content-count">x 1</span>
                                <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                                <em>$1230</em>
                                <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                            </li>
                            <li>
                                <a href="shop-item.html"><img src="{{asset('plantillaNew/assets/pages/img/cart-img.jpg')}}"
                                        alt="Rolex Classic Watch" width="37" height="34"></a>
                                <span class="cart-content-count">x 1</span>
                                <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                                <em>$1230</em>
                                <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                            </li>
                            <li>
                                <a href="shop-item.html"><img src="{{asset('plantillaNew/assets/pages/img/cart-img.jpg')}}"
                                        alt="Rolex Classic Watch" width="37" height="34"></a>
                                <span class="cart-content-count">x 1</span>
                                <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                                <em>$1230</em>
                                <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                            </li>
                            <li>
                                <a href="shop-item.html"><img src="{{asset('plantillaNew/assets/pages/img/cart-img.jpg')}}"
                                        alt="Rolex Classic Watch" width="37" height="34"></a>
                                <span class="cart-content-count">x 1</span>
                                <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                                <em>$1230</em>
                                <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                            </li>
                            <li>
                                <a href="shop-item.html"><img src="{{asset('plantillaNew/assets/pages/img/cart-img.jpg')}}"
                                        alt="Rolex Classic Watch" width="37" height="34"></a>
                                <span class="cart-content-count">x 1</span>
                                <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                                <em>$1230</em>
                                <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                            </li>
                            <li>
                                <a href="shop-item.html"><img src="{{asset('plantillaNew/assets/pages/img/cart-img.jpg')}}"
                                        alt="Rolex Classic Watch" width="37" height="34"></a>
                                <span class="cart-content-count">x 1</span>
                                <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                                <em>$1230</em>
                                <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                            </li>
                        </ul>
                        <div class="text-right">
                            <a href="shop-shopping-cart.html" class="btn btn-default">View Cart</a>
                            <a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--END CART -->

            <!-- BEGIN NAVIGATION -->
            <div class="header-navigation">
                <ul>
                    <li class="dropdown">
                        <a href="{{url('/')}}">HOME</a>
                    </li>
                    <li class="dropdown dropdown-megamenu">
                        <a href="{{url('/contact')}}">CONTACTO</a>
                    </li>
                    <li class="dropdown dropdown-megamenu">
                        <a href="{{url('/my-conecta')}}">MI CONECTA</a>
                    </li>
                    <li class="dropdown dropdown-megamenu">
                        <a href="{{url('/imeis')}}">VALIDACIÓN DE IMEI</a>
                    </li>
                </ul>
            </div>
            <!-- END NAVIGATION -->
        </div>
    </div>
    <!-- Header END -->

    <div class="container">
    @yield('content')
    </div>
    

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN BOTTOM ABOUT BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>Contratos</h2>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i> <a target="_blank" href="{{asset('legales/Contratos Autorizados/Altcel II, S.A.P.I. de C.V.!!Altcel 305-2020.pdf')}}">Contrato de Adhesión 305-2020</a></li>
                        <li><i class="fa fa-angle-right"></i> <a target="_blank" href="{{asset('legales/Contratos Autorizados/Altcel II, S.A.P.I. de C.V.!!Altcel 306-2020.pdf')}}">Contrato de Adhesión 306-2020</a></li>
                        <li><i class="fa fa-angle-right"></i> <a target="_blank" href="{{asset('legales/Contratos Autorizados/Altcel II, S.A.P.I. de C.V.!!Altcel II 307-2020.pdf')}}">Contrato de Adhesión 307-2020</a></li>
                        <li><i class="fa fa-angle-right"></i> <a target="_blank" href="{{asset('legales/Contratos Autorizados/Altcel II, S.A.P.I. de C.V.!!Altcel II 132-2021.pdf')}}">Contrato de Adhesión 132-2021</a></li>
                        <li><i class="fa fa-angle-right"></i> <a target="_blank" href="{{asset('legales/Contratos Autorizados/Altcel II, S.A.P.I. de C.V.!!Altcel II 133-2021.pdf')}}">Contrato de Adhesión 133-2021</a></li>
                    </ul>
                </div>
                <!-- END BOTTOM ABOUT BLOCK -->
                <!-- BEGIN BOTTOM INFO BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>Referencias</h2>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i> <a target="_blank" href="{{asset('legales/ALT-ARC-F01 FORMATO DERECHOS ARCO 2.pdf')}}">Formato de Derechos Arco 2</a></li>
                        <li><i class="fa fa-angle-right"></i> <a target="_blank" href="{{asset('legales/Carta de Derechos Minimos de los Usuarios.pdf')}}">Carta de derechos mínimos de los usuarios de los servicios públicos de telecomunicaciones</a></li>
                        <li><i class="fa fa-angle-right"></i> <a target="_blank" href="{{asset('legales/CÓDIGO DE PRACTICAS COMERCIALES ALTCEL II.pdf')}}">Código de Prácticas Comerciales</a></li>
                        <li><i class="fa fa-angle-right"></i> <a target="_blank" href="{{asset('legales/POLITICA Y CONDICIONES DE USO ALTCEL II.pdf')}}">Políticas y Condiciones de Uso Altcel II</a></li>
                        <li><i class="fa fa-angle-right"></i> <a target="_blank" href="{{asset('legales/PROCEDIMIENTO PARA LA ATENCIÓN DE DUDAS, QUEJAS Y ACLARACIONES.PDF')}}">Procedimiento para la Atención de Dudas, Aclaraciones, Quejas y Reclamaciones</a></li>
                    </ul>
                </div>
                <!-- END INFO BLOCK -->

                <!-- BEGIN TWITTER BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2 class="margin-bottom-0">Enlaces</h2>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Home</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Contacto</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Mi Conecta</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">IMEI's</a></li>
                    </ul>
                </div>
                <!-- END TWITTER BLOCK -->

                <!-- BEGIN BOTTOM CONTACTS -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>Compártenos tus dudas y/o sugerencias</h2>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;"><i class="fa-solid fa-map"></i> Circuito de la 10ª Poniente Norte, No. 1050 Col. Vista Hermosa, Tuxtla Gutiérrez, Chiapas.</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="tel://8002258235"><i class="fa-solid fa-square-phone"></i> 800 2 ALTCEL(258235)</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;"><i class="fa-solid fa-envelope"></i> soporte@altcel2.com</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;"><i class="fa-solid fa-envelope"></i> Correo electrónico para la atención de requerimientos formulados por las autoridades competentes en materia de seguridad y justicia. colaboracionseguridad@altcel2.com</a></li>
                    </ul>
                </div>
                <!-- END BOTTOM CONTACTS -->
            </div>
            <hr>
           
        </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="row ">
                <!-- BEGIN COPYRIGHT -->
                <div class="col-md-4 col-sm-4 padding-top-10">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Altcel II S.A.P.I. de C.V.
                </div>
                <!-- END COPYRIGHT -->
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN fast view of a product -->
    
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->
    
    <script src="{{asset('plantillaNew/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('plantillaNew/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- <script src="{{asset('plantillaNew/assets/corporate/scripts/back-to-top.js')}}" type="text/javascript"></script> -->
    <script src="{{asset('plantillaNew/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{asset('plantillaNew/assets/plugins/fancybox/source/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('plantillaNew/assets/plugins/owl.carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
    <!-- slider for products -->
    <script src="{{asset('plantillaNew/assets/plugins/zoom/jquery.zoom.min.js')}}" type="text/javascript"></script><!-- product zoom -->
    <script src="{{asset('plantillaNew/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js')}}" type="text/javascript"></script>
    <!-- Quantity -->

    <script src="{{asset('plantillaNew/assets/corporate/scripts/layout.js')}}" type="text/javascript"></script>
    <script src="{{asset('plantillaNew/assets/pages/scripts/bs-carousel.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            Layout.init();
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
        var scrolltotop={
            //startline: Integer. Number of pixels from top of doc scrollbar is scrolled before showing control
            //scrollto: Keyword (Integer, or "Scroll_to_Element_ID"). How far to scroll document up when control is clicked on (0=top).
            setting: {startline:100, scrollto: 0, scrollduration:1000, fadeduration:[500, 100]},
            controlHTML: '<img src="../public/plantillaNew/assets/corporate/img/up.png" style="width:40px; height:40px" />', //HTML for control, which is auto wrapped in DIV w/ ID="topcontrol"
            controlattrs: {offsetx:10, offsety:10}, //offset of control relative to right/ bottom of window corner
            anchorkeyword: '#top', //Enter href value of HTML anchors on the page that should also act as "Scroll Up" links

            state: {isvisible:false, shouldvisible:false},

            scrollup:function(){
                if (!this.cssfixedsupport) //if control is positioned using JavaScript
                    this.$control.css({opacity:0}) //hide control immediately after clicking it
                var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
                if (typeof dest=="string" && jQuery('#'+dest).length==1) //check element set by string exists
                    dest=jQuery('#'+dest).offset().top
                else
                    dest=0
                this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
            },

            keepfixed:function(){
                var $window=jQuery(window)
                var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
                var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
                this.$control.css({left:controlx+'px', top:controly+'px'})
            },

            togglecontrol:function(){
                var scrolltop=jQuery(window).scrollTop()
                if (!this.cssfixedsupport)
                    this.keepfixed()
                this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
                if (this.state.shouldvisible && !this.state.isvisible){
                    this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
                    this.state.isvisible=true
                }
                else if (this.state.shouldvisible==false && this.state.isvisible){
                    this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
                    this.state.isvisible=false
                }
            },
            
            init:function(){
                jQuery(document).ready(function($){
                    var mainobj=scrolltotop
                    var iebrws=document.all
                    mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest //not IE or IE7+ browsers in standards mode
                    mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
                    mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>')
                        .css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety, right:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer'})
                        .attr({title:'Scroll Back to Top'})
                        .click(function(){mainobj.scrollup(); return false})
                        .appendTo('body')
                    if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='') //loose check for IE6 and below, plus whether control contains any text
                        mainobj.$control.css({width:mainobj.$control.width()}) //IE6- seems to require an explicit width on a DIV containing text
                    mainobj.togglecontrol()
                    $('a[href="' + mainobj.anchorkeyword +'"]').click(function(){
                        mainobj.scrollup()
                        return false
                    })
                    $(window).bind('scroll resize', function(e){
                        mainobj.togglecontrol()
                    })
                })
            }
        }

        scrolltotop.init()
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>