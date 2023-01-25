@extends('layouts.myapp')

@section('content')

<div id="map" style="width: 500px; height: 500px;">

</div>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=l&callback=initMap"></script>
<script>
    class Localizacion{
        constructor(callback){
            if(navigator.geolocation){
                // Obtener ubicación
                navigator.geolocation.getCurrentPosition((position) => {
                    this.latitude = position.coords.latitude;
                    this.longitude = position.coords.longitude;

                    callback();
                });
            }else{
                alert('Tu navegador no soporta geolocalización :(');
            }
        }
    }

    function initMap(){
        var ubicacion = new Localizacion(() => {
            options = {
                center: {
                    lat: ubicacion.latitude,
                    lng: ubicacion.longitude
                },
                zoom: 15
            }

            var map = document.getElementById('map');
            mapa = new google.maps.Map(map,options);
        });
    }
</script>
@endsection