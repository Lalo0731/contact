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
			<div class="card">
				<div class="card-body">
					<h3 class="mb-4">Beneficios</h3>
					<form action="{{route('beneficios.store')}}" method="POST" enctype="multipart/form-data">
					{{csrf_field() }} 
						<div class="form-group">
							<label for="Title">{{'Title'}}</label>
							<input type="text" class="form-control rounded-top" name="Title" id="Title" placeholder="Title">
						</div>
						<div class="form-group">
							<label for="SubTilte">{{'SubTitle'}}</label>
							<input type="text" class="form-control" name="SubTitle" id="SubTitle" placeholder="Subtitle">
						</div>
						<div class="form-group">
							<label for="Description">{{'Description'}}</label>
							<textarea class="form-control" id="Description" name="Description" rows="3"></textarea>
						</div>
						<div class="form-group">
							<label for"Foto">Seleccione una imagen</label>
							<br>
							<input type="file" name="Foto" id="Foto" value="" accept="image/*">
							<input type="hidden" name="type" id="type" value="beneficios">
						</div>
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
				<th scope="col">Ttle</th>
				<th scope="col">SubTitle</th>
				<th scope="col">Description</th>
				<th scope="col">Imagen</th>
				<th scope="col">Tipo</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($beneficios as $beneficio)
				<tr>
					<th>{{$beneficio->id}}</th>
					<td>{{$beneficio->Title}}</td>
					<td>{{$beneficio->SubTitle}}</td>
					<td>{{$beneficio->Description}}</td>
					<td>
						<img src="{{asset('storage/uploads/beneficios/'.$beneficio->Foto)}}"  width="250">
					</td>
					<td>{{$beneficio->Type}}</td>
					<td>
					<a href="{{url('/beneficios/'.$beneficio->id.'/edit')}}" class="btn btn-warning mt-2">Editar</a>
					<form method="POST" action="{{ url('beneficios/'.$beneficio->id) }}">
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
