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

<form action="" method="post" enctype="multipart/form-data" >
<div class="container ">
	<div class="row no-gutters border border-dark">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h3 class="mb-4">Imagenes Banners</h3>
					<form action="{{route('imagenes.store')}}"  method="POST" id="imgForm" name="imgForm" class="imgForm" enctype="multipart/form-data">
						{{csrf_field() }}
						<label for="">Seleccione un tipo de Banner</label>
						<br>
                        <select class="form-select" name="Tipo" id="Tipo" aria-label="Default select example">
                            <option selected>Seleccione una Opción</option>
                            <option value="Banner Contact">Banner Contacto</option>
                            <option value="Banner Email">Banner Email</option>
                        </select>
                        <br>
						<div class="mt-2">
							<label for"Foto">Seleccione una imagen</label>
							<br>
							<input type="file" name="Foto" id="Foto" value="" accept="image/*">
							<input type="hidden" name="type" id="type" value="principal">
							<br>
							<img src="" id="img1" style="width:70%;">
							<br>
							<input type="submit" value="agregar" class="btn btn-primary">
						</div>
					</form>
				
				</div>
			</div>
		</div>
	</div>
</form>

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