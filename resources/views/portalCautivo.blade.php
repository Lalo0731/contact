<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('portal-cautivo1/css/bootstrap.css')}}">
    <script type="text/javascript" src="https://pay.conekta.com/v1.0/js/conekta-checkout.min.js"></script>
    <title>..:: Altcel Conecta ::..</title>
    <style>
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
  <body>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-6 text-center">
          <img src="{{asset('portal-cautivo1/images/logo.png')}}" style="width:100%;">
          <br><br>
          <h1><a href="tel:8002258235">Recarga saldo haciendo click aquí o llama al 800 2 258235</a></h1>
          <div class="alert alert-danger col-md-12 mt-3" role="alert" >
            <strong>ESTE PORTAL ESTÁ EN MANTENIMIENTO, POR EL MOMENTO TE PUEDES COMUNICAR AL NÚMERO QUE SE MUESTRA AQUÍ ARRIBA</strong>
          </div>
          <div class="form-group mt-5 col-md-12">
            <label for="exampleInputPassword1">Ingrese número de línea: </label>
            <input type="number" aria-label="First name" id="msisdn" class="form-control" maxlength="10">
          </div>
          <div class="mt-2">
            <input type="button" id="okMsisdn" value="Consultar" class="btn btn-info" >
            <br>
          </div>

          <div class="alert alert-info d-none col-md-12 mt-3" role="alert" id="alert-rate">
            
          </div>
          <div class="from-group mt-2 mb-2">
            <select class="form-control" style="display:none" id="ofertas" aria-label=".form-select-lg example" >
              <option selected>Elegir...</option>
            </select>
            <div class="col-md-12 row d-none justify-content-center" id="paymentsMethods">
              <div class="mx-2 my-2">
                <button type="button" class="btn btn-success" id="paymentCard">Tarjeta</button>
              </div>
              <div class="mx-2 my-2">
              <button type="button" class="btn btn-info" id="anotherMethods">Otros Medios</button>
              </div>
            </div>
            
          </div>

          <!--Formulario -->
          
          <form class="row" id="form">
          <div class="alert alert-warning col-md-12 mt-3 mx-3" role="alert" >
            Verifica tus datos, por favor. En caso de no ser correctos puedes corregirlos.
          </div>
            <div class="form-group col-md-6">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="name" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
              <label for="Apellido">Apellido:</label>
              <input type="text" class="form-control" id="lastname_user" placeholder="Apellido">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputPassword1">Email: </label>
              <input class="form-control" type="email" id="email_user" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputPassword1">Celular: </label>
              <input type="text" class="form-control" id="cellphone_user" placeholder="Celular">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputPassword1">Monto</label>
              <input class="form-control" type="text" id="amount_view" placeholder="$0.0" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputPassword1">Concepto: </label>
              <input type="text" class="form-control" id="concepto" value="" placeholder="Concepto">
            </div>
            <div class="form-group col-md-6 d-none" id="selectPaymentMethods">
              <label for="inputState">Metodos de Pago</label>
              <select id="metodo" class="form-control">
                <option value="0" selected>Elegir...</option>
                <option value="1">OpenPay</option>
                <option value="2">Oxxo</option>
              </select>
              <input type="hidden" id="user_id" >
              <input type="hidden" id="client_id">
              <input type="hidden" id="number_id">
              <input type="hidden" id="referencestype_id" value="">
              <input type="hidden" id="amount">
              <input type="hidden" id="rate_id">
              <input type="hidden" id="offer_id">
              <input type="hidden" id="offer_id_altan">
              <input type="hidden" id="pay_id">
            </div>
            <div class="form-group col-md-12">
              <button class="btn btn-success" id="acceptPayment" type="button">
              Aceptar</button>
              <button type="button" class="mb-xs mt-xs mr-xs btn btn-info d-none" id="btn-reference-openpay" data-toggle="modal" data-target="#reference"><i class="fa fa-eye"></i> Referencia OpenPay</button>
              <button type="button" class="mb-xs mt-xs mr-xs btn btn-info d-none" id="btn-reference-oxxo" data-toggle="modal" data-target="#referenceOxxo"><i class="fa fa-eye"></i> Referencia OXXOPay</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal de referencia OpenPay -->
<div class="modal fade" id="reference" tabindex="-1" aria-labelledby="reference" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="referenceLabel">Referencia</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div>
            <iframe class="col-md-12" id="reference-pdf" style="height: 400px;" src=""></iframe>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
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
            <div class="opps">
                <div class="opps-header">
                    <div class="opps-reminder">Ficha digital, puedes capturar la pantalla. No es necesario imprimir.</div>
                        <div class="opps-info">
                            <div class="opps-brand"><img src="{{asset('portal-cautivo1/images/oxxopay_brand.png')}}" alt="OXXOPay"></div>
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
                    <div class="opps-instructions">
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

<!-- Modal -->
<div class="modal fade" id="modalCheckout" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalCheckoutLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Portal de Pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="conektaIframeContainer" style="height: 700px;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('portal-cautivo1/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('portal-cautivo1/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('portal-cautivo1/js/sweetalert2.all.min.js')}}"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script>

        // $('#ofertas').hide();
        $('#form').hide();

      $('#msisdn').on('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
      });

      var JWT = '', product = '', status = '', methodPaymentG = 'T';

      //codigo original
      $("#okMsisdn").click(function(){
        let msisdn = $('#msisdn').val();
        let surplus, options = '<option selected value="0">Elegir</option>';

        $.ajax({
          url: "{{route('verify-exists-msisdn')}}",
          data: {msisdn:msisdn},
          beforeSend: function(){
              Swal.fire({
                  title: 'Estamos buscando tu número...',
                  html: 'Espera un poco, un poquito más...',
                  didOpen: () => {
                      Swal.showLoading();
                  }
              });
          },
          success: function(response){
            Swal.close();
            if(response.http_code == 1){
              product = response.product;
              status = response.status;
              getInformationMSISDN(msisdn,product);
            }else{
              Swal.fire({
                icon: 'error',
                title: 'Woops!!',
                text: 'El número '+msisdn+' NO EXISTE dentro de nuestros registros.',
                timer: 2500
              })
            }
          }
        })
      });

      function getInformationMSISDN(msisdn,producto){
        let rates = '<option selected value="0">Elegir</option>', ratesArray = 0, dataMSISDN = '';
        if(producto == 'MOV'){
          $.ajax({
            url: "{{route('my-conecta-actions')}}",
            data: {action: 'surplus', msisdn: msisdn},
            beforeSend: function(){
                Swal.fire({
                    title: 'Estamos verificando las recargas disponibles para ti',
                    html: 'Espera un poco, un poquito más...',
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response){
              response = JSON.parse(response);
              ratesArray = response.packsSurplus;
              dataMSISDN = response.dataMSISDN;
              ratesArray.forEach(function(element){
                rates += "<option value='"+element.id+"' data-rate-price='"+element.price_sale+"' data-rate-id='"+dataMSISDN.rate_id+"'  data-offer-id='"+element.id+"' data-offeridaltan='"+element.offerID+"'>"+element.name+" - $"+parseFloat(element.price_sale).toFixed(2)+"</option>"
              });

              $('#ofertas').html(rates);
              $('#ofertas').show();
              $('#paymentsMethods').removeClass('d-none');

              $('#name').val(dataMSISDN.name_user);
              $('#lastname_user').val(dataMSISDN.lastname_user);
              $('#email_user').val(dataMSISDN.email_user);
              $('#cellphone_user').val(dataMSISDN.MSISDN);
              $('#concepto').val('Compra de GBs Altcel');

              $('#user_id').val(dataMSISDN.id_user);
              $('#client_id').val(dataMSISDN.id_user);
              $('#number_id').val(dataMSISDN.number_id);
              $('#referencestype_id').val(5);
              $('#rate_id').val(dataMSISDN.rate_id);
              $('#pay_id').val(0);
              Swal.close();
            }
          })
        }else{

        }
      }

      $('#ofertas').on('change', function(){
        let price = $('#ofertas option:selected').attr('data-rate-price');
        let rateId = $('#ofertas option:Selected').attr('data-rate-id');
        let offerId = $('#ofertas option:Selected').attr('data-offer-id');
        let offerIDAltan = $('#ofertas option:Selected').attr('data-offeridaltan');
        $('#amount').val(parseFloat(price).toFixed(2));
        $('#amount_view').val(parseFloat(price).toFixed(2));
        $('#rate_id').val(rateId);
        $('#offer_id').val(offerId);
        $('#offer_id_altan').val(offerIDAltan);
      });

      $('#paymentCard').click(function(){
        $('#form').show();
        methodPaymentG = 'T';
      });

      $('#anotherMethods').click(function(){
        methodPaymentG = 'O';
        $('#form').show();
        $('#selectPaymentMethods').removeClass('d-none');
      });

      $('#acceptPayment').click(function(){
        let name = $('#name').val();
        let lastname = $('#lastname_user').val();
        let email = $('#email_user').val();
        let cellphone = $('#cellphone_user').val();
        let amount = $('#amount').val();
        let offer_id = $('#offer_id').val();
        let offerID = $('#offer_id_altan').val();
        let rate_id = $('#rate_id').val();
        let number_id = $('#number_id').val();
        let pay_id = $('#pay_id').val();
        let client_id = $('#client_id').val();
        let channel = $('#metodo').val();
        let concepto = $('#concepto').val();
        let referencestype = $('#referencestype_id').val();
        let msisdn = $('#msisdn').val();
        let data;
        
        if(methodPaymentG == 'O'){
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
        }

        if(pay_id == 0){
            pay_id = null;
        }
        $('#generateReference').attr('disabled',true);
        // console.log('Button disabled...');
        // return false;

        if(methodPaymentG == 'T'){
          data = {
            name: name+' '+lastname, email: email, channel: 'T', amount:amount, concepto:concepto
          };
          
        }else if(methodPaymentG == 'O'){
          data = {
            number_id: number_id, name: name, lastname: lastname, email: email,
            cel_destiny_reference: cellphone, amount: amount, offer_id: offer_id,
            concepto: concepto, type: referencestype, channel: channel, rate_id: rate_id, user_id: client_id,
            client_id: client_id, pay_id: pay_id, quantity: 1,from:'portal-cautivo'
          };
        }

        

        console.log(channel);

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
                console.log(response);
                if(methodPaymentG == 'T'){
                  window.ConektaCheckoutComponents.Integration({
                      targetIFrame: "#conektaIframeContainer",
                      checkoutRequestId: response.checkout.id, // checkout request id
                      publicKey: "key_D1ovsHrPniMraUA6iftCxQA",
                      options: {},
                      styles: {},
                      onFinalizePayment: function(event){
                          console.log(event,'EVENTO PAID');
                          if(event.charge.status == 'paid'){
                            $.ajax({
                              url: "{{route('purchase-by-client')}}",
                              method: "POST",
                              data: { _token:"{{csrf_token()}}", number_id: number_id, offer_id: offer_id, rate_id: rate_id, who_did_id: client_id, amount: amount, offerID: offerID, msisdn: msisdn, from:'portal-cautivo', order_id_conekta: event.charge.order_id },
                              beforeSend: function(){
                                  Swal.fire({
                                      title: 'Realizando Recarga...',
                                      html: 'Si esto tarda demasiado o existe algún error, capture la pantalla donde aparece PAGO EXITOSO con los datos que muestran y comuníquese al número mostrado en esta página o mande las evidencias a contacto@altcel2.com.',
                                      didOpen: () => {
                                          Swal.showLoading();
                                      }
                                  });
                              },
                              success: function(response){
                                response = JSON.parse(response);
                                if(response.http_code == 1){
                                  Swal.fire({
                                    icon: 'success',
                                    title: 'Well done!!',
                                    text: 'Recarga realizada con éxito.'
                                  });

                                  setTimeout(function(){
                                    location.reload();
                                  }, 3000);
                                }else{
                                  Swal.fire({
                                    icon: 'error',
                                    title: 'Woops!!',
                                    text: 'Al parecer algo salió mal, capture la pantalla donde aparece PAGO EXITOSO con los datos que muestran y comuníquese al número mostrado en esta página o mande las evidencias a contacto@altcel2.com.'
                                  });
                                }
                                console.log(response);
                              }
                            })
                          }else{
                            console.log('Algo salió mal...');
                          }
                      }
                  })
                  $('#modalCheckout').modal('show');
                }else{
                  if(channel == 1){
                  // referenceWhatsapp = response.reference;
                  pdfPaynet(response.reference,cellphone,name,lastname);
                  }else if(channel == 2){
                      // referenceWhatsapp = response.charges.data[0].payment_method.reference;
                      showOxxoPay(response.amount,response.charges.data[0].payment_method.reference);
                  }
                } 
            }
        });
      })

      $('#ok').click(function(){
        let token = JWT
        let phone = $('#cellphone_user').val()
        let name = $('#name').val()
        let lastname = $('#lastname_user').val()
        let email = $('#email_user').val()
        let number = $('#number_id').val(), amount = $('#amount').val(), offer_id = $('#offer_id').val(), concepto = $('#concepto').val(), type = $('#referencestype_id').val(), rate_id = $('#rate_id').val(), user_id = $('#user_id').val(), client_id = $('#client_id').val(), channel = $('#metodo').val(), payId= $('#pay_id').val();

        let quantity = 1, pay_id = payId.length > 0 ? payId : null;
        if (channel == 0) {
          alert('Debe elegir un método de pago.')
          return false
        }

        console.log(type);
        // return false;

        let data = {
          token: token,
          number_id: number,
          name: name,
          lastname: lastname,
          email: email,
          cel_destiny_reference: phone,
          amount: amount,
          offer_id: offer_id,
          concepto: concepto,
          rate_id: rate_id,
          user_id: user_id,
          client_id: client_id,
          channel: channel,
          quantity: quantity,
          pay_id:pay_id
        }
        
        $('#ok').attr('disabled', true);

        
        $.ajax({
          url: 'altan.php',
          type: 'GET',
          data: {data:data, type:type},
          success: function(response){
            response = JSON.parse(response);
            console.log(response)
            if (response.status == 'Token is Expired') {
              alert('El tiempo de espera excedió, recargue la página.')
              location.reload()
            }else if(response.status == 'Token is Invalid'){
              alert('Al parecer ya ha solicitado una recarga, por razones de seguridad se refrescará la pantalla para que pueda solicitar una nueva recarga.')
              location.reload()
            }else if(response.status == 'Authorization Token not found'){
              alert('Al parecer no tienes permiso pra realizar esta acción, se refrescara la pantalla')
              location.reload()
            }else{
              if(channel == 1){
                pdfPaynet(response.reference,phone,name,lastname)
              }else if(channel == 2){
                showOxxoPay(response.amount,response.charges.data[0].payment_method.reference)
              }
            }
          }
        })
      })
      function pdfPaynet(reference,celphone,name,lastname){
                let link = 'https://dashboard.openpay.mx/paynet-pdf/m3one5bybxspoqsygqhz/'+reference;
                // let link = 'https://sandbox-dashboard.openpay.mx/paynet-pdf/mvtmmoafnxul8oizkhju/'+reference;
                $('#btn-reference-openpay').removeClass('d-none');
                $('#reference-pdf').removeClass('d-none');
                $('#reference-pdf').attr('src', link);
                $('#reference').modal('show');
            }

            function showOxxoPay(amount,reference){
                amount = amount/100;
                $('#btn-reference-oxxo').removeClass('d-none');
                $('#montoOxxo').html('$'+amount.toFixed(2)+'<sup>MXN</sup>');
                $('#referenceOxxoCard').html(reference);
                $('#referenceOxxo').modal('show');
            }
    </script>
  </body>
</html>