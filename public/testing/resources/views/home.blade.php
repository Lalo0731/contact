@extends('layouts.app')

@section('content')
@if(session('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Well done!</strong> {{session('success')}}.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Ooops!</strong> {{session('error')}}.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif
<div class="container">
	<div class="row no-gutters">
		<div class="col-md-12">
			<div class="card card border border-dark">
				<div class="card-body">
					<h3 class="mb-4">Imagen Carousel</h3>
					<form action="{{route('files.store')}}"  method="POST" id="imgForm" name="imgForm" class="imgForm" enctype="multipart/form-data">
						{{csrf_field() }}
						<label for"Foto">Seleccione una imagen</label>
						<br>
						<input type="file" name="Foto" id="Foto" value="" accept="image/*">
						<input type="hidden" name="type" id="type" value="principal">
						<br>
						<img src="" id="img1" style="width:70%;">
						<br>
						<input type="submit" value="agregar" class="btn btn-primary">
					</form>
				
				</div>
			</div>
		</div>
	</div>
	<br>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Imagen</th>
				<th scope="col">Tipo</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody >
		@foreach($principals as $principal)
			<tr>
				<th>{{$principal->id}}</th>
				<td >
				<img src="{{asset('storage/uploads/'.$principal->Foto)}}"  width="500">
				</td>
				<td>{{$principal->Type}}</td>
				<td>
					<a href="{{url('/files/'.$principal->id.'/edit')}}" class="btn btn-warning mt-2">Editar</a>
					<form method="POST" action="{{url('files/'.$principal->id) }}">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger mt-2">Eliminar</button>
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
<script>
	document.getElementById("Foto").onchange = function(event) {
    console.log($(this).val());
    var file = event.target.files[0];
  	var reader = new FileReader();
  	reader.onload = function(event) {
    var img = document.getElementById('img1');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}
</script>
@endsection
