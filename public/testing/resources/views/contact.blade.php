@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('storage/uploads/imagenes/'.$contacts->Foto)}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contacto <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Contacto</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">Comunícate con nosotros</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row mb-5">
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Dirección:</span> Circuito de la 10ª Poniente Norte, No. 1050 Col. Vista Hermosa, Tuxtla Gutiérrez, Chiapas</p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Desde tu línea ALTCEL:</span> <a href="tel://*282">*282</a></p>
					            <p><span>Teléfono:</span> <a href="tel://9616177800">961 617 7800</a></p>
					            <p><span>LADA 800:</span> <a href="tel://8002258235">800 2 ALTCEL(258235</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">contacto@altcel2.com</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Website</span> <a href="#">altcel2.com</a></p>
					          </div>
				          </div>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-md-7">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Contáctanos</h3>
										<form method="POST" id="contactForm" name="contactForm" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Nombre completo</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Teléfono</label>
														<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email">Email</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="yourmail@example.com">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Asunto</label>
														<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Mensaje</label>
														<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Escríbenos lo que piensas"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="button" value="Enviar" class="btn btn-primary" id="send_mail">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-5 d-flex align-items-stretch">
									<div class="info-wrap w-100 p-5 img" style="background-image: url({{asset('plantilla/images/img-contact-form.jpg')}});">
				          </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <iframe class="col-md-12 map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.226491001156!2d-93.1231931776087!3d16.76540356848713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd958f624745d%3A0x2c9522b43f1235c2!2saltcel!5e0!3m2!1ses!2smx!4v1620067623792!5m2!1ses!2smx" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<!-- <iframe class="col-md-12 map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.226491001156!2d-93.1231931776087!3d16.76540356848713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd958f624745d%3A0x2c9522b43f1235c2!2saltcel!5e0!3m2!1ses!2smx!4v1620067623792!5m2!1ses!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
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
</script>
@endsection