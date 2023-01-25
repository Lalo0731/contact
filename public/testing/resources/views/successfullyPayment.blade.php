@extends('layouts.app')

@section('content')


<div class="row no-gutters" style="justify-content: center;">
    <div class="col-md-7" style="justify-content: center;">
        <div class="contact-wrap w-100 p-md-5 p-4">
            <div class="alert alert-success" role="alert">
                <strong>Well done!!</strong><br>
                ¡Tu pago se ha registrado con éxito! <i class="fa fa-check-circle" aria-hidden="true"></i><br>
                <a href="{{url('my-conecta')}}" class="alert-link">Seguir comprando <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>




@endsection