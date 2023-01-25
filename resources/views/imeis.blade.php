@extends('layouts.app')

@section('content')
<div class="col-md-12 d-flex justify-content-center img__imei">

    <div class="content-form-page mv_top__imeis">
        <div class="content_form__degrad">
            <h3 class="text__center">PORTAL DE VALIDACIÓN DE EQUIPOS</h3>
            <h3 class="margin-top-10 text__center" >CONSULTA TU IMEI</h3>
            
            <form role="form" class="form-horizontal form-without-legend text__center" id="contactForm" name="contactForm" class="contactForm">
                <div class="form-group mt-1">
                    <label class="col-lg-5 " style="font-weight: 700 !important;">SI NO CONOCES TU NÚMERO IMEI, MARCA DESDE TU CELULAR *#06#. TAMBIÉN SE PUEDE ENCONTRAR EN UNA ETIQUETA BLANCA DEBAJO DE LA BATERÍA DE TU DISPOSITIVO, SI NO ES CELULAR.</label>
                </div>
                <div class="form-group mt-1">
                    <label class="col-lg-5 " style="font-weight: 700 !important;">Puedes consultar el IMEI de tu CELULAR, dispositivo MIFI O HBB.</label>
                </div>
                <div class="form-group input__imei text_tu__imei">
                    <label class="col-lg-2 control-label " style="font-weight: 700 !important;" for="imei">INGRESA TU IMEI <span class="text-danger">*</span></label>
                    <div class="col-lg-3">
                        <input type="text" id="imei" name="imei" class="form-control border-roots text-dark-roots inputImei">
                    </div>
                </div>

                
                <div class="form-group btn__consultar" id="contentOptions">
                    <button type="button" class="btn btn-primary mg-roots border-roots inputConsul" id="consult">Consultar</button>
                </div>

                <div class="container " id="informationIMEI">
                    <div class="col-md-9">
                        <div class="alert alert-info col-md-7 mx-auto border-roots d-none mov_info__imei" role="alert" id="goodResponse">
                            <center>
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <strong id="titleIMEI">INFORMACIÓN DEL IMEI {{ 'IMEI' }}</strong>
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </center>

                            <div class="col-md-12" id="descriptionIMEI">
                                    <center>
                                        <h6 style="font-size: 15px; font-weight: 600; margin-top:1rem;">Características del Dispositivo</h6>
                                    </center>
                                    <label>Compatible con Banda28: &nbsp;</label><strong id="band28" class="text-danger">NO</strong><br>
                                    <label>Marca: &nbsp;</label><strong id="brand" class="text-danger">Marca</strong><br>
                                    <label>Modelo: &nbsp;</label><strong id="model" class="text-danger">Modelo</strong><br>
                                    <label>VoLTE: &nbsp;</label><strong id="volteCapable" class="text-danger">VOLTE</strong><br>
                                    <center>
                                        <h6 style="font-size: 15px; font-weight: 600; margin-top:1rem;">IMEI</h6>
                                    </center>
                                    <label>Status: &nbsp;</label><strong id="blocked" class="text-danger">Bloqueado</strong><br>
                                    <label>Homologado: &nbsp;</label><strong id="homologated" class="text-danger">Homologado</strong><br>
                                    <label>IMEI: &nbsp;</label><strong id="imeiD" class="text-danger">IMEI</strong><br>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-danger col-md-7 mx-auto border-roots d-none" role="alert" id="badResponse">
                            <strong id="errorDescription"></strong>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#consult').click(function(){
        let imei = $('#imei').val();
        
        $.ajax({
            url: "{{route('consultIMEI')}}",
            data: {imei:imei},
            beforeSend: function(){
                Swal.fire({
                    title: 'Validando IMEI',
                    html: 'Espera un poco, un poquito más...',
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response){
                Swal.close();
                response = JSON.parse(response);

                if(response.deviceFeatures){
                    $('.img__imei').addClass('img__imei2');
                    $('#titleIMEI').html('INFORMACIÓN DEL IMEI '+imei);
                    $('#band28').html(response.deviceFeatures.band28);
                    $('#brand').html(response.deviceFeatures.brand);
                    $('#model').html(response.deviceFeatures.model);
                    $('#volteCapable').html(response.deviceFeatures.volteCapable);
                    let statusDescription = '';

                    if(response.imei.blocked == 'NO'){
                        statusDescription = 'DESBLOQUEADO';
                    }else if(response.imei.blocked == 'SI'){
                        statusDescription = 'BLOQUEADO';
                    }
                    $('#blocked').html(statusDescription);
                    
                    $('#homologated').html(response.imei.homologated);
                    $('#imeiD').html(response.imei.imei);

                    $('#goodResponse').removeClass('d-none');
                    $('#badResponse').addClass('d-none');
                }else{
                    $('#errorDescription').html(response.errorCode+' '+response.description);
                    $('#goodResponse').addClass('d-none');
                    $('#badResponse').removeClass('d-none');
                }

                location.href = '#informationIMEI';
                
            }
        });
    });
</script>
@endsection