@extends('layouts.myapp')

@section('content')
<!-- BEGIN SLIDER -->

<!-- END SLIDER -->

<div class="page-slider margin-bottom-35">
    <div id="carousel-example-generic" class="carousel slide carousel-slider">
        <!-- Indicators -->
        <ol class="carousel-indicators" id="myIndicators">
            <!-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
        </ol>

        <div class="carousel-inner" role="listbox" id="imagesMine">
            <!-- <div class="item carousel-item-four active" >
                <img src="{{asset('storage/uploads/760x480/PostInternetHogarConecta-24.jpg')}}" style="">
            </div>
            <div class="item carousel-item-four" >
                <img src="{{asset('storage/uploads/760x480/PostInternetHogarConecta-26.jpg')}}" style="">
            </div>
            <div class="item carousel-item-four" >
                <img src="{{asset('storage/uploads/760x480/Diseño1_Mesadetrabajo1copia2.jpg')}}" style="">
            </div> -->

        </div>

        <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button"
            data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button"
            data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</div>

<script type="text/javascript">
    start();
    window.onresize = start;

    function start(){
        let maxWidth = document.documentElement.clientWidth;
        let height = document.documentElement.clientHeight;
        let minWidth = 0;
        let images = "", indicators = "", count = 0;

        if(maxWidth > 1354){
            maxWidth = 20000;
            minWidth = 1355;
        }else if(maxWidth <= 1354 && maxWidth > 760){
            maxWidth = 1354;
            minWidth = 761;
        }else if(maxWidth <= 760 && maxWidth > 600){
            maxWidth = 760;
            minWidth = 601;
        }else if(maxWidth <= 600 && maxWidth > 500){
            maxWidth = 600;
            minWidth = 501;
        }else if(maxWidth <= 500 && maxWidth > 400){
            maxWidth = 500;
            minWidth = 401;
        }else if(maxWidth <= 400 && maxWidth > 300){
            maxWidth = 400;
            minWidth = 301;
        }else if(maxWidth <= 300){
            maxWidth = 300;
            minWidth = 0;
        }

        console.log(maxWidth);
        console.log(minWidth);
        
        $.ajax({
            url: "{{route('getImagesSlide')}}",
            data: { maxWidth:maxWidth, minWidth:minWidth },
            success: function(response){
                console.log(response);
                response.forEach(function(e){
                    if(count == 0){
                        indicators+="<li data-target='#carousel-example-generic' data-slide-to='"+count+"' class='active'></li>";
                        images+="<div class='item carousel-item-four active' ><img src='../public/storage/uploads/"+e.Foto+"'></div>";
                    }else{
                        indicators+="<li data-target='#carousel-example-generic' data-slide-to='"+count+"' class=''></li>";
                        images+="<div class='item carousel-item-four' ><img src='../public/storage/uploads/"+e.Foto+"'></div>";
                    }
                    count++;
                });
                $('#myIndicators').html(indicators);
                $('#imagesMine').html(images);
                console.log(indicators);
                console.log(images);
            }
        });
    }
</script>
<!-- <script>
    $(window).resize(function(){

        // if ($(window).width() <= 320) {  

        //     // is mobile device

        // }     
        alert($(window).width());
    });
</script> -->
@endsection