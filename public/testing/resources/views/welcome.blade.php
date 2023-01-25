
@extends('layouts.app')

@section('content')
<!-- <center><h1>EN CONSTRUCCIÓN...</h1></center> -->

<div id="container" class="cf">
        <div class="flexslider" style="heigth: 400px !important;">
          <ul class="slides">
          @foreach($principals as $principal)
                <li style="background-size:cover;">
                    <img src="{{asset('storage/uploads/'.$principal->Foto)}}" style="background-size:cover;">
  	    		</li>
            @endforeach
          </ul>
        </div>
  </div>
  
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
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-2 mb-1">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Conoce nuestros paquetes MIFI</h2>
            </div>
        </div>
        <div class="row">
            <div class="row col-md-12" style="display: flex;justify-content: center;">

                <div class="col-md-3 ftco-animate mb-5">
                    <div class="block-7" style="display: flex;justify-content: center;">
                        <div>
                            <img src="{{asset('PaquetesHBB/conecta-none.png')}}" style="width: 100% !important;">
                            <img src="{{asset('PaquetesHBB/Mifi_5GB.png')}}" style="width: 100% !important;">
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
                            <img src="{{asset('PaquetesHBB/Mifi_10GB.png')}}" style="width: 100% !important;">
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
                            <img src="{{asset('PaquetesHBB/Mifi_30GB.png')}}" style="width: 100% !important;">
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
                            <img src="{{asset('PaquetesHBB/Mifi_Recurso4.png')}}" style="width: 100% !important;">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn mifi" style=" background-color: #843b8f; color:white;"><i class="fas fa-shopping-cart"></i> Contrata</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light pt-0 pb-0">
    <!-- <div class="container"> -->
        <center>
            <div class="col-md-7">
                <a href="{{url('/my-conecta')}}">
                    <img src="{{asset('PaquetesHBB/my-conecta-banner.png')}}" style="width: 100%;">
                </a>
            </div>
        </center>
    <!-- </div> -->
</section>

<section class="ftco-section bg-light">
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