@extends('layouts.app')
@section('content')
<div class="container" class="mt-5">
	<div class="row no-gutters">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h3 class="mb-4">Editar Beneficios</h3>
					<form action="{{url('/beneficios/'.$beneficios->id)}}" method="POST" enctype="multipart/form-data">
					{{csrf_field() }} 
					{{method_field('patch')}}
						<div class="form-group">
							<label for="Title">Title</label>
							<input type="text" class="form-control" name="Title" id="Title" placeholder="Title" value="{{$beneficios->Title}}">
						</div>
						<div class="form-group">
							<label for="SubTilte">Subtitle</label>
							<input type="text" class="form-control" name="SubTitle" id="SubTitle" placeholder="Subtitle" value="{{$beneficios->SubTitle}}">
						</div>
						<div class="form-group">
							<label for="Description">Description</label>
							<textarea class="form-control" id="Description" name="Description" rows="3">{{$beneficios->Description}}</textarea>
						</div>
						<div class="form-group">
							<label for"Foto">Imagen</label>
							<br>
							<img src="{{asset('storage/uploads/beneficios/'.$beneficios->Foto)}}"  width="400">
							<input type="file" name="Foto" id="Foto" value="" accept="image/*">
							<input type="hidden" name="type" id="type" value="beneficios">
						</div>
						<br>
						<img src="" id="img1" style="width:70%;">
						<br>
						<input type="submit" value="Guardar" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection