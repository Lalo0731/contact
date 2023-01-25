<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Solicitúd de Pagos Recurrentes</title>
  </head>
  <body>
    <br>
    <br>
    <h1 class="text-center">Solicitúd de Pagos Recurrentes</h1>
    <br>
    <br>

    <form action="/recurrente" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="name">Nombre Completo</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Nombre Completo">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Correo Electrónico">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="phone">Teléfono</label>
            <input name="phone" type="text" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Teléfono">
          </div>
        </div>
        <div class="col-md-3">
          <label for="paquete">Paquete Adquirido</label>
          <select class="form-control" id="paquete" name="paquete">
            <option>Paquete 1</option>
            <option>Paquete 2</option>
            <option>Paquete 3</option>
            <option>Paquete 4</option>
            <option>Paquete 5</option>
          </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <button class="btn btn-primary" type="submit">Enviar</button>  
        </div>
      </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>