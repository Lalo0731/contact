<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
          <img src="images/logo.png" style="width:100%;">
          <br><br>
          <h1><a href="tel:8002258235">Recarga saldo haciendo click aquí o llama al 800 2 258235</a></h1>
          <div class="alert alert-danger col-md-12 mt-3" role="alert" >
            Si has llegado hasta aquí, es por que tu servicio se ha agotado.
          </div>
          <div class="form-group mt-5 col-md-12">
            <label for="exampleInputPassword1">Ingrese número de línea: </label>
            <input type="text" aria-label="First name" id="msisdn" class="form-control" maxlength="10">
          </div>
          <div class="mt-2">
            <input type="button" id="okMsisdn" value="Consultar" class="btn btn-info" >
            <br>
          </div>

          <div class="alert alert-info d-none col-md-12 mt-3" role="alert" id="alert-rate">
            
          </div>
          <div class="from-group mt-2 mb-2">
            <select class="form-control" id="ofertas" aria-label=".form-select-lg example" >
              <option selected>Elegir...</option>
            </select>
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
              <input type="text" class="form-control" id="concepto" value="Reactivación de servicio Altcel2" placeholder="Concepto">
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">Metodos de Pago</label>
              <select id="metodo" class="form-control">
                <option value="0" selected>Elegir...</option>
                <option value="1">OpenPay</option>
                <option value="2">Oxxo</option>
              </select>
              <input type="hidden" id="user_id" >
              <input type="hidden" id="client_id">
              <input type="hidden" id="number_id">
              <input type="hidden" id="referencestype_id" value="5">
              <input type="hidden" id="amount" value="0">
              <input type="hidden" id="rate_id" value="0">
              <input type="hidden" id="offer_id" value="0">
            </div>
            <div class="form-group col-md-12">
              <button class="btn btn-success" id="ok" type="button">
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
                            <div class="opps-brand"><img src="images/oxxopay_brand.png" alt="OXXOPay"></div>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $('#ofertas').hide();
      $('#form').hide()

      $('#msisdn').on('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
      });

      var JWT = '';

      $("#okMsisdn").click(function(){
        let msisdn = $('#msisdn').val();
        let surplus, options = '<option selected value="0">Elegir</option>';
        $.ajax({
          url: 'altan.php',
          type: 'POST',
          data: {type:'access'},
          success: function(data)
            {
                data = JSON.parse(data);
                JWT = data.token;
                $.ajax({
                  url: 'altan.php',
                  type: 'POST',
                  data: {type:'getData', msisdn:msisdn, token:JWT},
                  success: function(data)
                    {
                        data = JSON.parse(data);
                        surplus = data.packsSurplus;
                        surplus.forEach(function(element){
                          options+= "<option value='"+element.offerID+"' data-rate-price='"+element.price_sale+"' data-rate-id='"+element.id+"' data-offer-id='"+element.alta_offer_id+"'>"+element.name+"</option>"
                        })
                       
                        $('#alert-rate').removeClass('d-none')
                        $('#alert-rate').html('<strong>Tu plan es: '+data.dataMSISDN.rate_name+'<br> Tenemos disponibles para ti los siguientes paquetes:</strong>')
                        $('#ofertas').html(options);
                        console.log(data.dataMSISDN)
                        $('#name').val(data.dataMSISDN.name_user)
                        $('#lastname_user').val(data.dataMSISDN.lastname_user)
                        $('#email_user').val(data.dataMSISDN.email_user)
                        $('#cellphone_user').val(data.dataMSISDN.cellphone_user)

                        $('#user_id').val(data.dataMSISDN.id_user);
                        $('#client_id').val(data.dataMSISDN.id_user);
                        $('#number_id').val(data.dataMSISDN.number_id);

                        
                    }
                });
            }
        })
        $('#ofertas').show();
      });

      $('#ofertas').on('change', function(){
        $('#form').show()
        let price = $('#ofertas option:selected').attr('data-rate-price');
        let rateId = $('#ofertas option:Selected').attr('data-rate-id');
        let offerId = $('#ofertas option:Selected').attr('data-offer-id');
        $('#amount').val(parseFloat(price).toFixed(2));
        $('#amount_view').val(parseFloat(price).toFixed(2));
        $('#rate_id').val(rateId);
        $('#offer_id').val(offerId);
        console.log(price)
      });

      $('#ok').click(function(){
        let token = JWT
        let phone = $('#cellphone_user').val()
        let name = $('#name').val()
        let lastname = $('#lastname_user').val()
        let email = $('#email_user').val()
        let number = $('#number_id').val(), amount = $('#amount').val(), offer_id = $('#offer_id').val(), concepto = $('#concepto').val(), type = $('#referencestype_id').val(), rate_id = $('#rate_id').val(), user_id = $('#user_id').val(), client_id = $('#client_id').val(), channel = $('#metodo').val();

        let quantity = 1, pay_id = null
        if (channel == 0) {
          alert('Debe elegir un método de pago.')
          return false
        }

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
          type: type,
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
          type: 'POST',
          data: data,
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