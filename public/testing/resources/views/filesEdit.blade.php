@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row no-gutters">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h3 class="mb-4">Editar Imagen</h3>
					<form action="{{url('/filesEdit/'.$file->id)}}"  method="post" enctype="multipart/form-data">
						@csrf 	
				
						<label for"Foto">{{'Foto'}}</label>
						<br>
						<img src="{{asset('storage/uploads/'.$file->Foto)}}" id="img1" width="400">
						<br>
						<input type="file" name="Foto" id="Foto" value="">
						<input type="hidden" name="type" id="type" value="principal">
						<br>
						<br>
						<input type="submit" value="Guardar" class="btn btn-primary">
					</form>
                </div>
			</div>
		</div>
	</div>
</div>	
@endsection