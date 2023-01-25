
@extends('layouts.app')

@section('content')
<!-- <center><h1>EN CONSTRUCCIÓN...</h1></center> -->

<!-- <div id="container" class="cf">
    <div class="flexslider" style="heigth: 400px !important;">
        <ul class="slides ul-imagen">
        @foreach($principals as $principal)
            <li style="background-size:cover;">
                <img src="{{asset('storage/uploads/'.$principal->Foto)}}" style="background-size:cover;">
            </li>
        @endforeach
        </ul>
    </div>
</div> -->

<div id="carouselExampleIndicators" class="carousel slide pt-0 top_img__carru"  data-ride="carousel">
  <ol class="carousel-indicators">
    @php
        $countImage = 0;
    @endphp
    @foreach($principals as $principal)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$countImage}}" class="@if ($countImage == 0) active @else @endif"></li>
        @php
            $countImage++;
        @endphp
    @endforeach
  </ol>
  <div class="carousel-inner ">
    @php
        $countImage = 0;
    @endphp
    @foreach($principals as $principal)
        <div class="carousel-item @if ($countImage == 0) active @else @endif ul-imagen">
        <img class="d-block w-100" src="{{asset('storage/uploads/'.$principal->Foto)}}" alt="First slide">
        </div>
        @php
            $countImage++;
        @endphp
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- <div id="container" class="cf">
    <div class="slider">
        <ul class="ul-imagen">
            @foreach($principals as $principal)
                    <li class="li-imagen">
                        <img src="{{asset('storage/uploads/'.$principal->Foto)}}">
                    </li>
            @endforeach
        </ul>
    </div>
</div> -->





<!-- <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('plantilla/images/fondochido2.jpg')}}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-11 ftco-animate text-center">
                    <h1 class="mb-4" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
						En construcción...
					</h1>
                </div>
            </div>
        </div>
    </div> -->
    <br><br>


    <section id="page-title" class="page-title-center">
        <div class="container clearfix">
            <div class="row plan__paquet" >
                <div class="btn1 btnIndexOpt btn-informacion sim" onclick="sim()">
                    <img class="icon-index" src="{!! asset('PaquetesHBB/tarjColor.jpg') !!}" alt="Paquetes">
                    <h2 class="paquete pat__paquete">SIM</h2>
                </div>
                <div class="btn1 btnIndexOpt btn-informacion mifis" onclick="mifi()">
                    <img class="icon-index" src="{!! asset('PaquetesHBB/mifiColor.jpg') !!}" alt="Internet">
                    <h2 class="paquete">MIFI</h2>
                </div>
                <div class="btn1 btnIndexOpt btn-informacion hbbs" onclick="hbb()">
                    <img class="icon-index" src="{!! asset('PaquetesHBB/hbbColor.jpg') !!}" alt="Soporte">
                    <h2 class="paquete">HBB</h2>
                </div>
            </div>
        </div>
    </section>

    <div id="info_product">
        <div class="narv_info" id="mos_sim">
            <div class="narv_info__text">
                <div class="narv_info_conf">
                    <div class="narv_info__text">
                        <img src="{!! asset('PaquetesHBB/SIM.png') !!}" alt="Paquete info" class="img_sim__info">
                    </div>
                    <div class="fontSim">
                        <h2>Características</h2>
                        <p class="g4_vol"><span class="g4">4G</span> VoLTE</p>
                        <p class="mini-sin">MINI-SIM</p>
                        <img src="{!! asset('PaquetesHBB/SIM-2.png') !!}" alt="SIM" class="img_sim__caracter">
                    </div>
                    <div class="mov_sim">
                        <img src="{!! asset('PaquetesHBB/CHIP-01.png') !!}" alt="SIM" class="chip1">
                        <div>
                            <h3 class="micro_sim">MICRO-SIM</h3>
                            <img src="{!! asset('PaquetesHBB/CHIP-03.png') !!}" alt="SIM" class="chip2">
                            <div>
                                <div class="mov_mini__sim">
                                    <hr class="hr">
                                    <hr class="hr2">
                                    <hr class="hr3">
                                </div>
                                <div class="info_chip">
                                    <h3>25 mm</h3>
                                </div>
                            </div>
                            <div>
                                <div class="mov_mini__sim2">
                                    <hr class="hr4">
                                    <hr class="hr5">
                                    <hr class="hr6">
                                </div>
                                <div class="info_chip1">
                                    <h3>15 mm</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="nano_sim">NANO-SIM</h3>
                            <img src="{!! asset('PaquetesHBB/CHIP-02.png') !!}" alt="SIM" class="chip3">
                            <div>
                                <div>
                                    <div class="mov_line__chip">
                                        <hr class="hr_1">
                                        <hr class="hr_2">
                                        <hr class="hr_3">
                                    </div>
                                    <div class="info_chip_1">
                                        <h3>15 mm</h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="mov_line_chip2">
                                        <hr class="hr__4">
                                        <hr class="hr__5">
                                        <hr class="hr__6">
                                    </div>
                                    <div class="info_chip__1">
                                        <h3>12 mm</h3>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div class="mov_line__chip2">
                                        <hr class="hr__1">
                                        <hr class="hr__2">
                                        <hr class="hr__3">
                                    </div>
                                    <div class="info_chip__2">
                                        <h3>12.3 mm</h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="mov_line_chip_2">
                                        <hr class="hr__4">
                                        <hr class="hr__5">
                                        <hr class="hr__6">
                                    </div>
                                    <div class="info_chip__3">
                                        <h3>8.8 mm</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="narv_info narv_info__hbb" id="mos_hbb">
            <div class="narv_info__text">
                <div class="narv_info_conf">
                    <div class="narv_info__text">
                        <img src="{!! asset('PaquetesHBB/HBB.png') !!}" alt="Paquete info" class="img_hbb__info">
                    </div>
                    <div class="fontSim fontSim2">
                        <h2>Características</h2>
                        <p class="g4_vol"><span class="g4">4G</span> VoLTE</p>
                        <p class="mini-sin">MINI-SIM</p>
                        <img src="{!! asset('PaquetesHBB/HBB-2.png') !!}" alt="SIM" class="img_sim__caracter">
                    </div>
                    <div class="contenedor-anuncios">
                        <div class="anuncio">
                            <div class="contenido-anuncio">
                                <ul class="iconos-caracteristicas">
                                    <li class="icon_list1">
                                        <div class="icon_list__img">
                                            <img src="{!! asset('PaquetesHBB/Icono-wifi.png') !!}" alt="Icono-wifi" class="img_wifi">
                                        </div>
                                        <div class="text_wifi1">
                                            <h3 class="text_infos"><span class="text_black">Alcance WIFI</span><br>Hasta <span class="text_black">100 metros en interiores</span></h3>
                                            <h3 class="text_infos"><span class="text_black">Hasta 150 metros al aire libre</span></h3>
                                        </div>

                                    </li>
                                    <li class="icon_list_2">
                                        <div class="icon_list__img2">
                                            <img src="{!! asset('PaquetesHBB/Icono-conexion.png') !!}" alt="Icono Conexion" class="img_conexion">
                                        </div>
                                        <div class="text_conexion">
                                            <h3 class="text_infos">Conexión hasta<br><span class="text_black">32 dispositivos</span></h3>
                                            <h3 class="text_infos">al mismo tiempo</h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contenido-anuncio">
                                <ul class="iconos-caracteristicas">
                                    <li class="icon_list_3">
                                        <div class="icon_list__img3">
                                            <img src="{!! asset('PaquetesHBB/Icono-config.png') !!}" alt="Icono-wifi" class="img_config">
                                        </div>
                                        <div class="text_config">
                                            <h3 class="text_infos"><span class="text_black">Configuración</span><br>Protegida con contraseña</h3>
                                        </div>

                                    </li>
                                    <li class="icon_list_4">
                                        <div class="icon_list__img4">
                                            <img src="{!! asset('PaquetesHBB/Icono-contrasena.png') !!}" alt="Icono Conexion" class="img_contrasena">
                                        </div>
                                        <div class="text_contrasena">
                                            <h3 class="text_infos"><span class="text_black">Administración y Contraseñas</span></h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contenido-anuncio">
                                <ul class="iconos-caracteristicas">
                                    <li class="icon_list5">
                                        <div class="icon_list__img5">
                                            <img src="{!! asset('PaquetesHBB/Icono-antenas.png') !!}" alt="Icono Conexion" class="img_antenas">
                                        </div>
                                        <div class="text_antenas">
                                            <h3 class="text_infos"><span class="text_black">4 Antenas</span> para mejor rendimiento</h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="narv_info narv_info__mifi" id="mos_mifi">
            <div class="narv_info__text">
                <div class="narv_info_conf">
                    <div class="narv_info__text">
                        <img src="{!! asset('PaquetesHBB/MIFI.png') !!}" alt="Paquete info" class="img_mifi__info">
                    </div>
                    <div class="fontSim fontSim1">
                        <h2>Características</h2>
                        <p class="g4_vol"><span class="g4">4G</span> VoLTE</p>
                        <p class="mini-sin">MINI-SIM</p>
                        <img src="{!! asset('PaquetesHBB/MIFI-2.png') !!}" alt="SIM" class="img_sim__caracter">
                    </div>
                    <div class="contenedor-anuncios conten_anun__mifi">
                        <div class="anuncio">
                            <div class="contenido-anuncio">
                                <ul class="iconos-caracteristicas">
                                    <li class="icon_list">
                                        <div class="icon_list__img">
                                            <img src="{!! asset('PaquetesHBB/Icono-wifi.png') !!}" alt="Icono-wifi" class="img_wifi">
                                        </div>
                                        <div class="text_wifi">
                                            <h3 class="text_infos"><span class="text_black">Alcance WIFI</span><br>Hasta <span class="text_black">50 metros en interiores</span></h3>
                                            <h3 class="text_infos"><span class="text_black">Hasta 80 metros al aire libre</span></h3>
                                        </div>

                                    </li>
                                    <li class="icon_list2">
                                        <div class="icon_list__img2">
                                            <img src="{!! asset('PaquetesHBB/Icono-conexion.png') !!}" alt="Icono Conexion" class="img_conexion">
                                        </div>
                                        <div class="text_conexion">
                                            <h3 class="text_infos">Conexión hasta<br><span class="text_black">10 dispositivos</span></h3>
                                            <h3 class="text_infos">al mismo tiempo</h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contenido-anuncio">
                                <ul class="iconos-caracteristicas">
                                    <li class="icon_list3">
                                        <div class="icon_list__img3">
                                            <img src="{!! asset('PaquetesHBB/Icono-config.png') !!}" alt="Icono-wifi" class="img_config">
                                        </div>
                                        <div class="text_config">
                                            <h3 class="text_infos"><span class="text_black">Botón WPS</span><br>Para conectar fácilmente</h3>
                                            <h3 class="text_infos">dispositivos a tu red</h3>
                                        </div>

                                    </li>
                                    <li class="icon_list4">
                                        <div class="icon_list__img4">
                                            <img src="{!! asset('PaquetesHBB/Icono-contrasena.png') !!}" alt="Icono Conexion" class="img_contrasena">
                                        </div>
                                        <div class="text_contrasena">
                                            <h3 class="text_infos"><span class="text_black">2.4 GHz</span></h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contenido-anuncio">
                                <ul class="iconos-caracteristicas">
                                    <li class="icon_list6">
                                        <div class="icon_list__img5">
                                            <img src="{!! asset('PaquetesHBB/Icono-bateria.png') !!}" alt="Icono Conexion" class="img_bateria">
                                        </div>
                                        <div class="text_antenas">
                                            <h3 class="text_infos">Batería Recargable</h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- <section class="ftco-section testimony-section" style="background-image: url('{{asset('plantilla/images/fondochido.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 style="text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;">Conoce nuestros beneficios</h2>
                </div>
            </div>

            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                    @foreach($beneficios as $beneficio)
                        <div class="item">
                            <div class="testimony-wrap ">
                                <div class="icon d-flex align-items-center justify-content-center mt-2"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mt-4">{{$beneficio->Description}}</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('{{asset('storage/uploads/beneficios/'.$beneficio->Foto)}}')"></div>
                                        <div class="pl-3">
                                            <p class="name">{{$beneficio->Title}}</p>
                                            <span class="position">{{$beneficio->SubTitle}}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<!-- <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-2 mb-1">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Conoce nuestros paquetes MIFI</h2>
                <div>
                    <img src="{{asset('PaquetesHBB/conecta-none.png')}}" style="width: 100% !important;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row col-md-12" style="display: flex;justify-content: center;">

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/conecta-none.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/Mifi_5GB.png')}}" style="width: 100% !important; border-radius: 27px;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #146cac; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/conecta-none.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/Mifi_10GB.png')}}" style="width: 100% !important; border-radius: 27px;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color:  #244494; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/conecta-none.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/Mifi_30GB.png')}}" style="width: 100% !important; border-radius: 27px;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color:  #503b8f; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/conecta-none.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/Mifi_Recurso4.png')}}" style="width: 100% !important; border-radius: 27px;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #843b8f; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="ftco-section bg-light"> -->
<section class="ftco-section cartMov bg-light">
    <div class="containerIMG">
        <div class="row justify-content-center pb-2 mb-1">
            <div class="col-md-7 heading-section text_center ftco-animate view_clos__paqt">
                <h2>Paquetes de <span class="bold_movil__mifi">Internet Móvil MIFI</span></h2>
                <p>Contrata el paquete que más te guste y disfruta de esta nueva experiencia.</p>
            </div>
            <div class="col-md-7 heading-section text_center ftco-animate view_clos__paqt2">
                <h2>Paquetes de <span class="bold_movil__mifi">Internet FIJO HBB</span></h2>
                <p>Contrata el paquete que más te guste y disfruta de nuestros precios de promoción.</p>
            </div>
            <div class="col-md-7 heading-section text_center ftco-animate view_clos__paqt3">
                <h2>Paquetes de <span class="bold_movil__mifi">Internet FIJO HBB</span></h2>
                <p>Contrata el paquete que más te guste y disfruta de nuestros precios de promoción.</p>
            </div>
            <div class="col-md-7 heading-section text_center ftco-animate view_clos__sim">
                <h2>Paquetes de <span class="bold_movil__mifi">Telefonía Móvil</span></h2>
                <p>Contrata el paquete que más te guste y comunicate con los que más quieres.</p>
            </div>
            <div class="navbar navbar-expand-lg lat-1">
                <div class="container">
                    <!-- <div class="collapse navbar-collapse"> -->
                    <div class="mov_tarjet__product">
                        <ul class="navbar-nav ml-manu lat-2">
                            <li class="nav-item activa lat-3">
                                <!-- <a href='#target1'  id='target1' class='target'>Target 1</a> -->
                                <button class="button lat-4 selected" onclick="paqSim()">TELEFONíA MÓVIL</button>
                            </li>
                            <li class="nav-item lat-3">
                                <!-- <a href='#target2' id='target2' class='target'>Target 2</a> -->
                                <button class="button lat-4" onclick="paqMifi()">MIFI</button>
                            </li>
                            <li class="nav-item lat-3">
                                <!-- <div class="dropdown">
                                    <div class="dropbtn button lat-4 ">HBB</div>
                                    <div class="dropdow-content">
                                        <button class="button lat-4 modifi" onclick="paqHbb()">HBB</button>
                                        <button class="button lat-4 modifi" onclick="paqHbb()">HBB</button>
                                    </div>
                                </div> -->
                                <button class="button lat-4" onclick="paqHbb5()">HBB 5MB</button>
                            </li>
                            <li class="nav-item lat-3">
                                <button class="button lat-4" onclick="paqHbb10()">HBB 10MB</button>
                            </li>
                        </ul>
                        <hr class="line-producto_paqt">
                    </div>
                </div>
            </div>
        </div>
        <div class="row view_clos__sim view_tarj_center">
            <div class="row col-md-12" style="position: static; display: flex;justify-content: center;">
                <div class="col-md-4 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg" style="background-image: url('PaquetesHBB/sim10gb.jpg"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #5a5b3e; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-4 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg" style="background-image: url('PaquetesHBB/sim20gb.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color:  #522832; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-4 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg" style="background-image: url('PaquetesHBB/sim40gb.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color:  #256c89; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <!-- <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg" style="background-image: url('PaquetesHBB/Mifi_Recurso4.png');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #843b8f; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div> -->
            </div>
        </div>
        
        <div class="row view_clos__paqt view_tarj_center">
            <div class="row col-md-12" style="position: static; display: flex;justify-content: center;">
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg" style="background-image: url('PaquetesHBB/mifi5g.jpg"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #a0a59b; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg" style="background-image: url('PaquetesHBB/mifi10g.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color:  #548ba9; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg" style="background-image: url('PaquetesHBB/mifi30g.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color:  #c6b998; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg" style="background-image: url('PaquetesHBB/mifi50g.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #818a8d; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row view_clos__paqt2 view_tarj_center">
            <div class="row col-md-12" style="position: static; display: flex;justify-content: center;">
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/hbb50g.jpg"></div>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #b5c0af; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/hbb80g.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color:  #acbfcd; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/hbb100g.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color:  #cabd9b; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/hbb120g.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #979c9d; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/hbb140g.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #3d5f71; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <!-- <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/HBB_80GB.png');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #843b8f; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/Recurso-purple100.png');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #843b8f; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/Recurso-purple120.png');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #843b8f; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/Recurso-purple150.png');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #843b8f; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="row view_clos__paqt3 view_tarj_center">
            <div class="row col-md-12" style="position: static; display: flex;justify-content: center;">
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/hbb80_10g.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #9d724a; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/hbb100_10g.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #374e32; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/hbb120_10g.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #b5b5b4; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                <div class="col-md-3 cartMov_paauet mb-5">
                    <div style="display: flex;justify-content: center;">
                        <div class="cardWrap">
                            <div class="cardA">
                                <div class="cardBg2" style="background-image: url('PaquetesHBB/hbb150_10g.jpg');"></div>

                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #3e4559; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<!-- tarjetas con animacion -->
<!-- <div class="row view_clos__paqt">
    <div class="row col-md-12" style="position: static; display: flex;justify-content: center;">
        <div class="col-md-3 cartMov_paauet mb-5">
            <div style="display: flex;justify-content: center;">
                <div class="cardWrap">
                    <div class="cardA">
                        <div class="cardBg" style="background-image: url('PaquetesHBB/Mifi_5GB.png"></div>
                        <div class="cardInfo">
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <button class="btn mifi" style=" background-color: #146cac; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
            </div>
        </div>
        <div class="col-md-3 cartMov_paauet mb-5">
            <div style="display: flex;justify-content: center;">
                <div class="cardWrap">
                    <div class="cardA">
                        <div class="cardBg" style="background-image: url('PaquetesHBB/Mifi_10GB.png');"></div>
                        <div class="cardInfo">
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <button class="btn mifi" style=" background-color:  #244494; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
            </div>
        </div>
        <div class="col-md-3 cartMov_paauet mb-5">
            <div style="display: flex;justify-content: center;">
                <div class="cardWrap">
                    <div class="cardA">
                        <div class="cardBg" style="background-image: url('PaquetesHBB/Mifi_30GB.png');"></div>
                        <div class="cardInfo">
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <button class="btn mifi" style=" background-color:  #503b8f; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
            </div>
        </div>
        <div class="col-md-3 cartMov_paauet mb-5">
            <div style="display: flex;justify-content: center;">
                <div class="cardWrap">
                    <div class="cardA">
                        <div class="cardBg" style="background-image: url('PaquetesHBB/Mifi_Recurso4.png');"></div>
                        <div class="cardInfo">
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <button class="btn mifi" style=" background-color: #843b8f; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
            </div>
        </div>
    </div>
</div> -->


<!-- <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Conoce nuestros paquetes HBB</h2>
            </div>
        </div>
        <div class="row">
            <div class="row col-md-12" style="display: flex;justify-content: center;">

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/header-blue.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/HBB_50GB.png')}}" style="width: 100% !important;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn hbb" style=" background-color: #146cac; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/header-blue.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/HBB_50GB.png')}}" style="width: 100% !important;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn hbb" style=" background-color: #146cac; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/header-blue.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/Recurso-blue100.png')}}" style="width: 100% !important;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn hbb" style=" background-color: #146cac; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/header-blue.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/Recurso-blue120.png')}}" style="width: 100% !important;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn hbb" style=" background-color: #146cac; color:white; "><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/header-blue.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/Recurso-blue140.png')}}" style="width: 100% !important;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn hbb" style=" background-color: #146cac; color:white; "><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/header-purple.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/HBB_80GB.png')}}" style="width: 100% !important;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn hbb" style=" background-color: #6c4c94; color:white; "><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/header-purple.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/Recurso-purple100.png')}}" style="width: 100% !important;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn hbb" style=" background-color: #6c4c94; color:white; "><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/header-purple.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/Recurso-purple120.png')}}" style="width: 100% !important;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn hbb" style=" background-color: #6c4c94; color:white; "><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/header-purple.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/Recurso-purple150.png')}}" style="width: 100% !important;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn hbb" style=" background-color: #6c4c94; color:white; "><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="ftco-section bg-light pt-0 pb-0">
        <center>
            <div class="col-md-12 mejor__planes">
                <!-- <a href="{{url('/my-conecta')}}"> -->
                <a>
                    <section class="hero-wrap hero-wrap-2 her-wrapIMG img-sect__foot" style="background-image: url('{{asset('PaquetesHBB/foot_mejorPlanes.jpg')}}');">
                    </section> 
                </a>
            </div>
        </center>
</section> 

    <br>
    <!-- <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img"
        style="background-image: url({{asset('storage/uploads/imagenes/'.$contacts->Foto)}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-end">
                <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
                    <h2 class="mb-4">Ponte en contacto con nosotros y contrata ya</h2>
                    <form action="#" class="appointment">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="name" class="form-control" placeholder="Tu nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="telefono" class="form-control" placeholder="Teléfono">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="subject" class="form-control" placeholder="Asunto">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control" placeholder="yourmail@example.com">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                        placeholder="Escríbenos"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="button" value="Enviar" class="btn btn-primary py-3 px-4" id="send_mail">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <script src="{{asset('plantilla/js/jquery.min.js')}}"></script> -->
<script>
$('.button').on('click', function(){
    $('.button').removeClass('selected');
    $(this).addClass('selected');
});
$(function () {
  $('.sim').bind("click", function () {
      var dest = $("#info_product").offset().top;
      $("html, body").animate({scrollTop: dest},600);
  });
});
$(function () {
  $('.mifis').bind("click", function () {
      var dest = $("#info_product").offset().top;
      $("html, body").animate({scrollTop: dest},600);
  });
});
$(function () {
  $('.hbbs').bind("click", function () {
      var dest = $("#info_product").offset().top;
      $("html, body").animate({scrollTop: dest},600);
  });
});




$('#telefono').on('input', function () {
    this.value = this.value.replace(/[^0-9]/g,'');
});
    $('#send_mail').click(function(){
        let name = $('#name').val();
		let telefono = $('#telefono').val();
        let email = $('#email').val();
        let subject = $('#subject').val();
        let message = $('#message').val();
        let token = $('meta[name="csrf-token"]').attr('content');
        // console.log(message);
        if(name.length == 0 || /^\s+$/.test(name)){
            let message = "El campo Nombre no puede estar vacío.";
            sweetAlertFunction(message);
            document.getElementById('name').focus();
            return false;
        }

        if(telefono.length == 0 || /^\s+$/.test(telefono)){
            let message = "El campo Teléfono no puede estar vacío.";
            sweetAlertFunction(message);
            document.getElementById('telefono').focus();
            return false;
        }

        if(subject.length == 0 || /^\s+$/.test(subject)){
            let message = "El campo Asunto no puede estar vacío.";
            sweetAlertFunction(message);
            document.getElementById('subject').focus();
            return false;
        }

        if(email.length == 0 || /^\s+$/.test(email)){
            let message = "El campo Email no puede estar vacío.";
            sweetAlertFunction(message);
            document.getElementById('email').focus();
            return false;
        }

        if(message.length == 0 || /^\s+$/.test(message)){
            let message = "El mensaje no puede ir vacío.";
            sweetAlertFunction(message);
            document.getElementById('message').focus();
            return false;
        }

        var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

        if (caract.test(email) == false){
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Escriba un email válido.',
            showConfirmButton: false,
            timer: 2000
        })
            return false;
        }

        let headers = {headers: {'Content-type': 'application/json'}};
        let data = {
                _token:token,
                name: name,
                email: email,
                subject: subject,
                message: message,
                telefono: telefono
            };

        axios.post('/send-message-contact', data, headers).then(response => {
            Swal.fire({
                icon: 'success',
                title: 'Tu mensaje ha sido enviado.',
                text: 'Responderemos tan pronto sea posible.',
                showConfirmButton: false,
                timer: 3500
                })

        }).catch(e => {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo ha salido mal, estamos trabajando en ello.'
            })
        })
    });

    function sweetAlertFunction(message){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: message,
            showConfirmButton: false,
            timer: 2000
        })
    }

    $('.mifi').click(function(){
        window.open('https://api.whatsapp.com/send?phone=525612010013&text=Hola, quiero contratar el servicio de MIFI...', '_blank');
    });

    $('.hbb').click(function(){
        window.open('https://api.whatsapp.com/send?phone=525612010013&text=Hola, quiero contratar el servicio de HBB...', '_blank');
    });
</script>
@endsection