@extends('layouts.app')

@section('content')
<script src="https://kit.fontawesome.com/b7c221b65e.js" crossorigin="anonymous"></script>

<div class="row no-gutters" style="justify-content: center; z-index:999 !important;">
    <div class="col-md-7" style="justify-content: center;">
        <div class="contact-wrap w-100 p-md-5 p-4">
            <h2 class="mb-4">RECARGAS Y PAGOS DE MENSUALIDAD</h2>
            <h3 class="mb-4">INGRESA TU SIM</h3>
            <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label" for="name">Para realizar una recarga o el pago de mensualidad, ingresa tu número</label>
                            <input type="text" class="form-control" name="msisdn" id="msisdn" placeholder="3339061234" autocomplete="off" maxlength="10">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="label" for="name">Si no conoces tu número, puedes comunicarte con nosotros al 800 2 ALTCEL(258235)</label>
                    </div>
                </div>


                <div class="row" >
                    <div class="col-md-12 row">
                        <div class="form-group mr-3">
                            <button type="button" class="btn btn-primary d-none" id="surplus">Recargar</button>
                            <div class="submitting"></div>
                        </div>
                        <!-- <div class="form-group mr-3">
                            <button type="button" class="btn btn-primary" id="change">Cambiar mi plan</button>
                            <div class="submitting"></div>
                        </div> -->
                        <div class="form-group">
                            <button type="button" class="btn btn-primary d-none" id="monthly">Pagar mensualidad</button>
                            <div class="submitting"></div>
                        </div>
                    </div>
                </div>
            </form>

            <h2>
                <i class="fa fa-cc-mastercard fa-2x"></i>
                <i class="fa fa-cc-visa fa-2x"></i>
                <i class="fa fa-cc-amex fa-2x"></i> <br>
                <img src="{{ asset('plantilla/images/oxxo.jpg') }}" width="75px" alt="">
                <img src="{{ asset('plantilla/images/farmaciaahorro.png') }}" width="75px" alt="">
                <img src="{{ asset('plantilla/images/walmart.png') }}" width="100px" alt=""> <br>
                <img src="{{ asset('plantilla/images/7-eleven.png') }}" width="75px" alt="">
                <img src="{{ asset('plantilla/images/aurrera.png') }}" width="75px" alt="">
                <img src="{{ asset('plantilla/images/waldos.png') }}" width="75px" alt=""><br>
                <img src="{{ asset('plantilla/images/sams.png') }}" width="75px" alt="">
                <img src="{{ asset('plantilla/images/k.png') }}" width="65px" alt="">
                <img src="{{ asset('plantilla/images/superama.png') }}" width="105px" alt="">
            </h2>

        </div>
    </div>
</div>

<section class="ftco-section bg-light py-2 d-none" id="surplusRatesContent">
    <div class="container">
        <center>
            <h3 class="mb-2" id="titleCase">RECARGAS DISPONIBLES</h3>
            <div class="alert alert-info col-md-6" role="alert">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                <strong id="name_user_info"></strong>
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                <br>
                <ul class="mb-1">
                    <li id="rateInfo"></li>
                </ul>
                <p id="titleInfo"></p>
            </div>
        </center>
        <div class="row" id="rowsElementsRates" style="justify-content: center;">
        </div>
    </div>
</section>

<section class="ftco-section bg-light py-2 d-none" id="informationMSISDN">
    <div class="container">
        <div class="alert alert-info col-md-6 mx-auto" role="alert">
            <center>
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                <strong id="name_user_info">INFORMACIÓN DE TU SIM</strong>
                <i class="fa fa-info-circle" aria-hidden="true"></i>
            </center>

            <div class="col-md-12 " id="paymentInformation">
                <center>
                    <h6 id="titleStatusPayment">Información del pago</h6>
                </center>
                <strong id="daysLeft"></strong><br>
                <strong id="datePayment"></strong><br>
                <strong id="datePaymentLimit"></strong><br>
                <strong id="renovationDate"></strong>

                <div class="d-none" id="buttonPayment">
                    
                </div>
                <div class="d-none" id="descriptionPaymentContent">
                    <strong id="descriptionPayment" class="text-danger"></strong><br>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <center>
                    <h6>Unidades del paquete contratado:</h6>
                </center>
                <strong id="totalUnitsInfo"></strong><br>
                <strong id="totalFreeInfo"></strong><br>
                <strong id="freeUnitsInfo"></strong>
                <div class="progress">
                    <div id="freeUnits" class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <center>
                    <h6 id="titleRecharge">Unidades de recarga:</h6>
                </center>
                <strong id="totalUnits2Info"></strong><br>
                <strong id="totalFree2Info"></strong><br>
                <strong id="freeUnits2Info"></strong>
                <div class="progress">
                    <div id="freeUnits2" class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light py-2 d-none" id="informationOREDA">
    <div class="container">
        <div class="alert alert-info col-md-6 mx-auto" role="alert">
            <center>
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                <strong id="name_user_info_oreda">INFORMACIÓN DE TU SERVICIO TELMEX</strong>
                <i class="fa fa-info-circle" aria-hidden="true"></i>
            </center>

                <div class="col-md-12 " id="paymentInformationOREDA">
                    <center>
                        <h6 id="titleStatusPaymentOREDA">Información del pago</h6>
                    </center>
                    <div class="d-none" id="descriptionPaymentContentOREDA">
                        <center>
                            <strong id="descriptionPaymentOREDA" class="text-danger"></strong><br>
                        </center>
                    </div>
                    <div>
                        <ul id="monthlies">

                        </ul>
                    </div>
                <div>
                <strong id="name_user_info_oreda">TOTAL: <span id="totalOreda" class="text-danger"></span></strong>
                <div class="d-none" id="buttonPaymentOREDA">
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<input type="hidden" id="bool_mov">

<section class="ftco-section bg-light py-2 d-none" id="paymentContent">
    <div class="container">
        <center><h3 class="mb-4">ELIGE EL MÉTODO DE PAGO</h3></center>
        <div class="row" style="justify-content: center;">
            <button class="btn btn-primary mr-2 paymentMethod" data-type="reference" id="btn-reference-payment-way">REFERENCIA</button>
            <button class="btn btn-primary paymentMethod" data-type="card" id="btn-card-payment-way">TARJETA</button>
        </div>
    </div>
</section>

<section class="ftco-section bg-light py-2 d-none" id="referenceContent">
    <div class="container">
        <div class="row" style="justify-content: center;">
        <div class="row no-gutters" style="justify-content: center;">
            <div class="col-md-8">
                <div class="contact-wrap w-100 p-md-5 p-4">
                    <h3 class="mb-4">Datos de Pago Referenciado</h3>
                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="name">Nombre</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="lastname">Apellidos</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellidos">
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="label" for="cellphone">Contacto</label>
                                    <input type="email" class="form-control" name="cellphone" id="cellphone" placeholder="Teléfono">
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="label" for="monto">Monto</label>
                                    <input type="text" class="form-control" name="monto" id="monto" placeholder="$" disabled>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="label" for="concepto">Concepto</label>
                                    <input type="text" class="form-control" name="concepto" id="concepto" placeholder="Concepto de Pago" disabled>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="label" for="channel">Puntos de Pago</label>
                                    <select class="form-control" name="channel" id="channel">
                                        <option value="0">Elegir...</option>
                                        <option value="1">Farmacias del Ahorro, Bodega Aurrera, Walmart, Sam's Club</option>
                                        <option value="2">Oxxo</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-12 row">
                                <div class="form-group mr-3">
                                    <button type="button" class="btn btn-primary" id="generateReference">Generar</button>
                                    <div class="submitting"></div>
                                </div>
                                <div class="form-group mr-3">
                                    <button type="button" class="btn btn-primary d-none" id="modalReferenceOpenPay" data-toggle="modal" data-target="#referenceModalOpenPay">Referencia</button>
                                    <div class="submitting"></div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary d-none" id="modalReferenceOxxo" data-toggle="modal" data-target="#referenceOxxo">Referencia</button>
                                    <div class="submitting"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
        
		<input type="hidden" id="amount">
		<input type="hidden" id="offer_id">
		<input type="hidden" id="rate_id">
		<input type="hidden" id="referencestype">
		<input type="hidden" id="number_id">
		<input type="hidden" id="client_id">
		<input type="hidden" id="pay_id" value="0">
        <input type="hidden" id="exists">
        <input type="hidden" id="pack_id">

<!-- Modal Referencia OpenPay -->
<div class="modal fade" id="referenceModalOpenPay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="referenceModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="referenceModalBody">
        <iframe class="col-md-12" id="reference-pdf" style="height: 400px;" src=""></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de referencia OxxoPay -->
<div class="modal fade" id="referenceOxxo" tabindex="-1" aria-labelledby="referenceOxxo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="referenceOxxoLabel">Referencia OXXOPay</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="col-md-12">
                <div class="opps-header">
                    <div class="opps-reminder">Ficha digital, puedes capturar la pantalla. No es necesario imprimir.</div>
                        <div class="opps-info">
                            <div class="opps-brand"><img src="{{asset('PaquetesHBB/oxxopay_brand.png')}}" alt="OXXOPay"></div>
                            <div class="opps-ammount">
                                <h3 class="title-3">Monto a pagar</h3>
                                <!-- <h2>$ 0,000.00 <sup>MXN</sup></h2> -->
                                <h2 id="montoOxxo"></h2>
                                <p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
                            </div>
                        </div>
                        <div class="opps-reference">
                            <h3 class="title-3">Referencia</h3>
                            <h1 class="referenceOxxoCard" id="referenceOxxoCard"></h1>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3 class="title-3">Instrucciones</h3>
                        <ol class="instructions">
                            <li style="margin-top: 10px;color: #000000;">Acude a la tienda OXXO más cercana. <a class="search-oxxo" href="https://www.google.com.mx/maps/search/oxxo/" target="_blank">Encuéntrala aquí</a>.</li>
                            <li style="margin-top: 10px;color: #000000;">Indica en caja que quieres realizar un pago de <strong>OXXOPay</strong>.</li>
                            <li style="margin-top: 10px;color: #000000;">Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>
                            <li style="margin-top: 10px;color: #000000;">Realiza el pago correspondiente con dinero en efectivo.</li>
                            <li style="margin-top: 10px;color: #000000;">Al confirmar tu pago, el cajero te entregará un comprobante impreso. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
                        </ol>
                        <div class="opps-footnote">Al completar estos pasos recibirás un correo de <strong>Nombre del negocio</strong> confirmando tu pago.</div>
                    </div>
                </div>	
            <div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
        </div>
    </div>
</div>
<script>
   
    var url = "{{route('my-conecta-actions')}}";
    var monthly_items, monthlyJSON;

    $('#msisdn').on('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
        let msisdn = this.value;
        
        if(msisdn.length == 10){
            $('#surplusRatesContent').addClass('d-none');
            $('#paymentContent').addClass('d-none');
            $.ajax({
                url: "{{route('verify-exists-msisdn')}}",
                data: {msisdn:msisdn},
                success: function(response){
                    if(response.http_code == 0){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000
                        });
                        
                        $('#informationMSISDN').addClass('d-none');
                        $('#titleCase').html('SIN RECARGAS DISPONIBLES');
                        $('#rowsElementsRates').html('');
                        $('#surplusRatesContent').addClass('d-none');
                        $('#informationMSISDN').addClass('d-none');
                        $('#monthly').addClass('d-none');
                        $('#surplus').addClass('d-none');

                        return false;
                    }else if(response.http_code == 1 || response.http_code == 2 || response.http_code == 5){
                        let http_code = response.http_code;
                        let product = response.product;
                        $('#exists').val(http_code);
                        
                        if(http_code == 1){
                            $('#surplus').removeClass('d-none');
                            $('#monthly').removeClass('d-none');
                            $('#bool_mov').val(0);

                            if(product == 'MOV'){
                                $('#surplus').removeClass('d-none');
                                $('#monthly').addClass('d-none');
                                $('#bool_mov').val(1);
                            }
                        }else if(http_code == 2){
                            $('#surplus').removeClass('d-none');
                            $('#monthly').removeClass('d-none');
                            $('#bool_mov').val(0);
                        }else if(http_code == 5){
                            $('#surplus').addClass('d-none');
                            $('#monthly').removeClass('d-none');
                            $('#bool_mov').val(1);
                        }
                    }
                }
            });
        }
    });

    function validateMSISDN(msisdn){
        var bool = true;
        if(msisdn.length == 0 || /^\s+$/.test(msisdn)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Ingrese su número de SIM...',
                showConfirmButton: false,
                timer: 2000
            });
            document.getElementById('msisdn').focus();
            // return false;
            bool = false;
        }

        if(msisdn.length < 10 ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Ingrese su número de SIM válido...',
                showConfirmButton: false,
                timer: 2000
            });
            document.getElementById('msisdn').focus();
            // return false;
            bool = false;
        }

        return bool;
    }

   $('#surplus').click(function(){
       let msisdn = $('#msisdn').val();
       let bool_mov = $('#bool_mov').val();
       let dataMSISDN, packsSurplus, packs = '', validate = true;
       
       validate = validateMSISDN(msisdn);
    //    return false;
        
        if(!validate){
            return false;
        }

        $.ajax({
            url: url,
            data: {action: 'surplus', msisdn: msisdn},
            beforeSend: function(){
                Swal.fire({
                    title: 'Estamos extrayendo tu información...',
                    html: 'Espera un poco, un poquito más...',
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response){
                Swal.close();
                response = JSON.parse(response);
                dataMSISDN = response.dataMSISDN;
                packsSurplus = response.packsSurplus;
                console.log(dataMSISDN);
                $('#name').val(dataMSISDN.name_user);
                $('#lastname').val(dataMSISDN.lastname_user);
                $('#email').val(dataMSISDN.email_user);
                $('#cellphone').val(dataMSISDN.cellphone_user);
                $('#number_id').val(dataMSISDN.number_id);
                $('#client_id').val(dataMSISDN.id_user);

                $('#name_user_info').html(' Hola, '+dataMSISDN.name_user+' '+dataMSISDN.lastname_user+' ');

                if(bool_mov == 0){
                    $('#rateInfo').html('Tu paquete: '+dataMSISDN.rate_name);
                    $('#rateInfo').removeClass('d-none');
                }else if(bool_mov == 1){
                    $('#rateInfo').addClass('d-none');
                }

                
                $('#titleInfo').html('Tenemos las siguientes recargas para ti:');
                
                packsSurplus.forEach(function(element){
                    //    console.log(element);
                    packs+='<div class="col-md-6 col-lg-3 ">'+
                                    '<div class="staff" >'+
                                        '<div class="text pt-3 px-3 pb-4 text-center">'+
                                            '<h3>'+element.name+'</h3>'+
                                            '<span class="position mb-2">$'+parseFloat(element.price_sale).toFixed(2)+'</span>'+
                                            '<div class="faded">'+
                                                '<button class="btn btn-sm btn-warning" onclick="defineType(this.id)" id="purchase_'+element.id+'" data-offer-id="'+element.id+'" '+
                                                'data-type="5" data-rate-id="'+dataMSISDN.rate_id+'" data-amount="'+element.price_sale+'" data-concept="Compra de GBs Altcel" data-pay-id="0">Comprar <i class="fa fa-usd" aria-hidden="true"></i></button>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>';
                });

                $('#informationMSISDN').addClass('d-none');

                $('#titleCase').html('RECARGAS DISPONIBLES');
                $('#rowsElementsRates').html(packs);
                $('#surplusRatesContent').removeClass('d-none');
                setTimeout(function(){ location.href = '#surplusRatesContent'; }, 300);
            }
        });


        
   });

   $('#change').click(function(){
        let msisdn = $('#msisdn').val();
        let dataMSISDN, offersAndRates, ratesChange = '';
        
        validate = validateMSISDN(msisdn);
        // console.log(validate);
        if(!validate){
            return false;
        }

        $.ajax({
            url: url,
            data: {action: 'change', msisdn: msisdn},
            beforeSend: function(){
                Swal.fire({
                    title: 'Estamos extrayendo tu información...',
                    html: 'Espera un poco, un poquito más...',
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response){
                Swal.close();
                response = JSON.parse(response);
                dataMSISDN = response.dataMSISDN,
                offersAndRates = response.offersAndRates;
                $('#name').val(dataMSISDN.name_user);
                $('#lastname').val(dataMSISDN.lastname_user);
                $('#email').val(dataMSISDN.email_user);
                $('#cellphone').val(dataMSISDN.cellphone_user);
                $('#number_id').val(dataMSISDN.number_id);
                $('#client_id').val(dataMSISDN.id_user);

                $('#name_user_info').html(' Hola, '+dataMSISDN.name_user+' '+dataMSISDN.lastname_user);
                $('#rateInfo').html('Tu paquete: '+dataMSISDN.rate_name);
                $('#titleInfo').html('Tenemos los siguientes paquetes para ti:');
                console.log(dataMSISDN);
                console.log(offersAndRates);

                offersAndRates.forEach(function(element){
                    ratesChange+='<div class="col-md-6 col-lg-3 ">'+
                                    '<div class="staff" >'+
                                        '<div class="text pt-3 px-3 pb-4 text-center">'+
                                            '<h3>'+element.rate_name+'</h3>'+
                                            '<span class="position mb-2">$'+parseFloat(element.rate_price).toFixed(2)+'</span>'+
                                            '<div class="faded">'+
                                                '<button class="btn btn-sm btn-warning" onclick="defineType(this.id)" id="change_'+element.offer_id+'" data-offer-id="'+element.offer_id+'" '+
                                                'data-type="4" data-rate-id="'+element.rate_id+'" data-amount="'+element.rate_price+'" data-concept="Cambio de Paquete Altcel" data-pay-id="0">Comprar <i class="fa fa-usd" aria-hidden="true"></i></button>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>';
                });

                $('#informationMSISDN').addClass('d-none');
                $('#titleCase').html('PAQUETES DISPONIBLES');
                $('#rowsElementsRates').html(ratesChange);
                $('#surplusRatesContent').removeClass('d-none');
                setTimeout(function(){ location.href = '#surplusRatesContent'; }, 300);
            }
        });
   });

   $('#monthly').click(function(){
        let msisdn = $('#msisdn').val();
        let days = 0, FreeUnits, FreeUnits2, total, total2, freeUnits2Boolean;
        let http_code = $('#exists').val();

        validate = validateMSISDN(msisdn);
        
        if(!validate){
            return false;
        }

        $.ajax({
            url: url,
            data: {action: 'monthly', msisdn: msisdn, exists: http_code},
            beforeSend: function(){
                Swal.fire({
                    title: 'Estamos extrayendo tu información...',
                    html: 'Espera un poco, un poquito más...',
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response){
                Swal.close();

                if(http_code != 5){
                    FreeUnits = response.APIData.FreeUnits;
                    FreeUnits2 = response.APIData.FreeUnits2;

                    if(response.information.http_code == 0){
                        $('#titleStatusPayment').html('Aún falta para tu fecha de pago.');
                        $('#daysLeft').html('Faltan '+response.information.days+' días.');

                        $('#buttonPayment').html('');
                        $('#buttonPayment').addClass('d-none');
                        $('#descriptionPaymentContent').addClass('d-none');
                        $('#descriptionPayment').html('');
                        $('#paymentContent').addClass('d-none');
                    }else{

                        if(response.information.http_code == 1 || response.information.http_code == 2){
                            $('#titleStatusPayment').html('Ya puedes pagar.');
                            $('#daysLeft').html('Puedes pagar a partir de hoy.');
                            $('#buttonPayment').html('<button class="btn btn-primary" onclick="defineType(this.id)" id="monthly_'+response.information.activation_id+'" '+
                            'data-offer-id="'+response.information.offer_id+'" data-type="1" data-rate-id="'+response.information.rate_id+'" data-pack-id="0"'+
                            'data-amount="'+response.information.amount+'" data-concept="Pago de servicio Altcel Conecta" data-pay-id="'+response.information.pay_id+'" >Pagar <i class="fa fa-usd" aria-hidden="true"></i></button>');
                            $('#descriptionPayment').html('Estás próximo a pagar  el plan '+response.information.rate_name+' por $'+parseFloat(response.information.amount).toFixed(2));
                            $('#descriptionPaymentContent').removeClass('d-none');
                            $('#buttonPayment').removeClass('d-none');
                        }else if(response.information.http_code == 3){
                            $('#titleStatusPayment').html('Aún falta para tu fecha de pago.');
                            $('#daysLeft').html('Faltan '+response.information.days+' días.');
                            $('#descriptionPayment').html("Dado que aún falta para tu fecha de pago y si te has quedado sin GB's, te recomendamos realizar una recarga.");
                            $('#descriptionPaymentContent').removeClass('d-none');
                            $('#buttonPayment').addClass('d-none');
                        }
                        

                        $('#name').val(response.information.name_user);
                        $('#lastname').val(response.information.lastname_user);
                        $('#email').val(response.information.email_user);
                        $('#cellphone').val(response.information.cellphone_user);
                        $('#number_id').val(response.information.number_id);
                        $('#client_id').val(response.information.client_id);
                    }

                    $('#datePayment').html('Fecha de pago: '+response.information.datePayment);
                    $('#datePaymentLimit').html('Fecha límite de pago: '+response.information.dateLimit);
                    $('#renovationDate').html('Renueva el '+response.information.renovationDate);


                    let progressBar = $('#freeUnits');
                    let progressBar2 = $('#freeUnits2');

                    $('#totalUnitsInfo').html('Totales: '+parseFloat(FreeUnits.totalAmt).toFixed(2)+'GB');
                    $('#totalFreeInfo').html('Libres: '+parseFloat(FreeUnits.unusedAmt).toFixed(2)+'GB');
                    $('#freeUnitsInfo').html('Porcentaje libre: '+parseInt(FreeUnits.freePercentage)+'%');
                    progressBar.css('width',FreeUnits.freePercentage+'%');

                    if(response.APIData.FreeUnits2Boolean == 0){
                        $('#titleRecharge').html('Unidades de recarga (sin recarga generada):');
                    }else{
                        $('#titleRecharge').html('Unidades de recarga:');
                    }

                    $('#totalUnits2Info').html('Totales: '+parseFloat(FreeUnits2.totalAmt).toFixed(2)+'GB');
                    $('#totalFree2Info').html('Libres: '+parseFloat(FreeUnits2.unusedAmt).toFixed(2)+'GB');
                    $('#freeUnits2Info').html('Porcentaje libre: '+parseInt(FreeUnits2.freePercentage)+'%');
                    progressBar2.css('width',FreeUnits2.freePercentage+'%');

                    if(response.information.http_code == 0){

                        console.log('No hay pago por hacer, se mostrará información.');
                    }else if(response.information.http_code == 1){
                        console.log(response);
                        console.log('Se mostrará la orden de pago');
                    }

                    $('#rowsElementsRates').html('');
                    $('#surplusRatesContent').addClass('d-none');

                    $('#informationMSISDN').removeClass('d-none');
                    
                    setTimeout(function(){ location.href = '#informationMSISDN'; }, 300);
                }else{
                    monthly_items = response.monthly_items;
                    monthlyJSON = response.monthlyJSON;
                    let monthlies = '';
                    $('#amount').val(response.amount);
                    $('#client_id').val(response.client_id);
                    $('#pack_id').val(response.pack_id);
                    $('#offer_id').val(0);
                    $('#rate_id').val(0);
                    $('#number_id').val(0);

                    $('#informationOREDA').removeClass('d-none');
                    if(response.monthliesPendings == 1){
                        $('#descriptionPaymentOREDA').html('Estás por pagar tu mensualidad Telmex');
                        $('#buttonPaymentOREDA').html('<button class="btn btn-primary" onclick="defineType(this.id)" id="monthly_'+response.instalation_id+'" '+
                            'data-offer-id="0" data-type="2" data-rate-id="0" data-pack-id="'+response.pack_id+'" data-amount="'+response.amount+'" data-concept="Pago de '+response.pack_name+'" '+
                            'data-pay-id="'+response.pay_id+'" >Pagar <i class="fa fa-usd" aria-hidden="true"></i></button>');
                        $('#buttonPaymentOREDA').removeClass('d-none');
                        $('#pay_id').val(response.pay_id);
                        $('#referencestype').val(2);
                        $('#name').val(response.name);
                        $('#lastname').val(response.lastname);
                        $('#email').val(response.email);
                        $('#cellphone').val(response.phone);
                        $('#concepto').val("Pago de "+response.pack_name);
                    }else if(response.monthliesPendings >= 1){
                        $('#descriptionPaymentOREDA').html('Al parecer tienes más de una mensualidad pendiente por pagar de tu servicio Telmex');
                        $('#buttonPaymentOREDA').html('<button class="btn btn-success" onclick="oredaMultiPayments()">Pagar</button>');
                        $('#buttonPaymentOREDA').removeClass('d-none');
                        $('#pay_id').val(response.pay_id);
                        $('#referencestype').val(6);
                        $('#name').val(response.name);
                        $('#lastname').val(response.lastname);
                        $('#email').val(response.email);
                        $('#cellphone').val(response.phone);
                        $('#concepto').val("Pago de "+response.pack_name);
                    }else if(response.monthliesPendings == 0){
                        $('#descriptionPaymentOREDA').html('No tienes mensualidades por pagar');
                        $('#buttonPaymentOREDA').html('');
                        $('#buttonPaymentOREDA').addClass('d-none');
                        $('#pay_id').val(0);
                    }

                    $('#descriptionPaymentContentOREDA').removeClass('d-none');

                    monthly_items.forEach(function(e){
                        monthlies+="<strong><li>Fecha de pago: "+e.datePay+" - Fecha límite de pago: "+e.datePayLimit+" - <span class='text-danger'>Monto: $"+parseFloat(e.amount).toFixed(2)+"</span></li></strong>"
                    });
                    $('#monthlies').html(monthlies);
                    $('#totalOreda').html("$"+parseFloat(response.amount).toFixed(2));
                   
                }

            }
        });

        // $.ajax({
        //     url: "{{route('verify-exists-msisdn')}}",
        //     data: {msisdn:msisdn},
        //     beforeSend:  function(){
        //         Swal.fire({
        //             title: 'Verificando SIM...',
        //             html: 'Espera un poco, un poquito más...',
        //             didOpen: () => {
        //                 Swal.showLoading();
        //             }
        //         });
        //     },
        //     success: function(response){
        //         if(response.http_code == 0){
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'Oops...',
        //                 text: response.message,
        //                 showConfirmButton: false,
        //                 timer: 2000
        //             });
                    
        //             $('#rowsElementsRates').html('');
        //             $('#surplusRatesContent').addClass('d-none');
        //             $('#informationMSISDN').addClass('d-none');

        //             return false;
        //         }else if(response.http_code == 1){
                    
        //         }
        //     }
        // });
   });

   function oredaMultiPayments(){
       let amount = $('#amount').val();
       let offer_id = $('#offer_id').val();
       let rate_id = $('#rate_id').val();
       let referencestype = $('#referencestype').val();
       let number_id = $('#number_id').val();
       let client_id = $('#client_id').val();
       let pack_id = $('#pack_id').val();
       let pay_id = $('#pay_id').val();
       let name = $('#name').val();
       let lastname = $('#lastname').val();
       let email = $('#email').val();
       let cellphone = $('#cellphone').val();
       let concepto = $('#concepto').val();

       $.ajax({
           url: "{{route('my-conecta-oreda-payment')}}",
           method: "POST",
           data: {amount:amount, offer_id:offer_id, rate_id:rate_id, type:referencestype, number_id:number_id, client_id:client_id, user_id:client_id, pack_id:pack_id, pay_id:pay_id, monthly_items:monthlyJSON,
        name:name, lastname:lastname, email:email, phone:cellphone, concepto:concepto},
           success: function(response){
               response = JSON.parse(response);
               console.log(response);
               let link = response.url
               window.location.href = link;
           }
       });
   }

function defineType(id){
    let offer_id = $('#'+id).data('offer-id');
    let rate_id = $('#'+id).data('rate-id');
    let pack_id = $('#'+id).data('pack-id');
    let amount = $('#'+id).data('amount');
    let referencestype = $('#'+id).data('type');
    let concepto = $('#'+id).data('concept');
    let pay_id = $('#'+id).data('pay-id');
    let bool_mov = $('#bool_mov').val();
    
    $('#amount').val(amount);
    $('#monto').val(parseFloat(amount).toFixed(2));
    $('#offer_id').val(offer_id);
    $('#rate_id').val(rate_id);
    $('#pay_id').val(pay_id);
    $('#referencestype').val(referencestype);
    $('#concepto').val(concepto);
    $('#pack_id').val(pack_id);

    bool_mov == 1 ? $('#btn-reference-payment-way').addClass('d-none') : $('#btn-reference-payment-way').removeClass('d-none');

    $('#paymentContent').removeClass('d-none');
    location.href = '#paymentContent';
}

$('.paymentMethod').click(function(){
    let method = $(this).data('type');

    if(method == 'reference'){
        console.log('Generar referencia...');
        $('#referenceContent').removeClass('d-none');
        location.href = "#referenceContent";
    }else if(method == 'card'){
        let name = $('#name').val();
        let lastname = $('#lastname').val();
        let email = $('#email').val();
        let cellphone = $('#cellphone').val();
        let amount = $('#amount').val();
        let offer_id = $('#offer_id').val();
        let rate_id = $('#rate_id').val();
        let pack_id = $('#pack_id').val();
        let pay_id = $('#pay_id').val();
        let number_id = $('#number_id').val();
        let client_id = $('#client_id').val();
        let concepto = $('#concepto').val();
        let referencestype = $('#referencestype').val();
        let data, link = '';

        // if(pay_id == 0){
        //     pay_id = null;
        // }
        
        data = {
            name:name,lastname: lastname,
            email:email, cellphone:cellphone,
            amount:amount,concepto:concepto,
            referencestype:referencestype,
            offer_id: offer_id, rate_id:rate_id, pack_id:pack_id,
            number_id:number_id, channel_id:3,
            client_id:client_id, pay_id:pay_id
        }
        // console.log(data);
        // return false;
        $.ajax({
            url: "{{route('my-conecta-card-payment')}}",
            method: "POST",
            data: data,
            beforeSend: function(){
                Swal.fire({
                    title: 'Estamos generando tu orden de pago.',
                    html: 'Si esto tarda demasiado, recargue la página y vuelva a intentarlo o contacte a contacto@altcel2.com.',
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response){
                Swal.close();
                response = JSON.parse(response);
                link = response.url
                window.location.href = link;
                // console.log(response);
                // console.log(link);
            }

        });
    }
});

$('#generateReference').click(function(){
    let name = $('#name').val();
    let lastname = $('#lastname').val();
    let email = $('#email').val();
    let cellphone = $('#cellphone').val();
    let amount = $('#amount').val();
    let offer_id = $('#offer_id').val();
    let rate_id = $('#rate_id').val();
    let number_id = $('#number_id').val();
    let pay_id = $('#pay_id').val();
    let client_id = $('#client_id').val();
    let channel = $('#channel').val();
    let concepto = $('#concepto').val();
    let referencestype = $('#referencestype').val();
    let data;
    
    if(channel == 0){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Elige un punto de pago',
            showConfirmButton: false,
            timer: 2000
        });
        return false;
    }

    if(pay_id == 0){
        pay_id = null;
    }
    $('#generateReference').attr('disabled',true);
    // console.log('Button disabled...');
    // return false;

    data = {
        number_id: number_id, name: name, lastname: lastname, email: email,
        cel_destiny_reference: cellphone, amount: amount, offer_id: offer_id,
        concepto: concepto, type: referencestype, channel: channel, rate_id: rate_id, user_id: client_id,
        client_id: client_id, pay_id: pay_id, quantity: 1,from:'portal-cautivo'
    };

    $.ajax({
        url: "{{route('my-conecta-reference')}}",
        method: "POST",
        data: data,
        beforeSend: function(){
            Swal.fire({
                title: 'Generando referencia',
                html: 'Si esto tarda demasiado, recargue la página y vuelva a intentarlo o contacte a contacto@altcel2.com.',
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        },
        success: function(response){
            Swal.close();
            response = JSON.parse(response);
            // console.log(response);
            if(channel == 1){
            // referenceWhatsapp = response.reference;
            pdfPaynet(response.reference,cellphone,name,lastname);
            }else if(channel == 2){
                // referenceWhatsapp = response.charges.data[0].payment_method.reference;
                showOxxoPay(response.amount,response.charges.data[0].payment_method.reference);
            }
        }
    });

})

    function pdfPaynet(reference,celphone,name,lastname){
        let link = 'https://dashboard.openpay.mx/paynet-pdf/m3one5bybxspoqsygqhz/'+reference;
        // let link = 'https://sandbox-dashboard.openpay.mx/paynet-pdf/mvtmmoafnxul8oizkhju/'+reference;
        $('#referenceModalLabel').html(reference);
        $('#modalReferenceOpenPay').removeClass('d-none');
        $('#modalReferenceOxxo').addClass('d-none');
        $('#reference-pdf').attr('src', link);
        $('#referenceModalOpenPay').modal('show');
    }

    function showOxxoPay(amount,reference){
        amount = amount/100;
        // $('#referenceWhatsapp2').removeClass('d-none');
        $('#modalReferenceOxxo').removeClass('d-none');
        $('#modalReferenceOpenPay').addClass('d-none');
        $('#montoOxxo').html('$'+amount.toFixed(2)+'<sup>MXN</sup>');
        $('#referenceOxxoCard').html(reference);
        $('#referenceOxxo').modal('show');
    }
</script>
@endsection