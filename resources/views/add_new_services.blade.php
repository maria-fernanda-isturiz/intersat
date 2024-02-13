<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Servicios nuevos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <h1 class="mt-3 text-center">Registrar Servicio Nuevos</h1>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <form class="m-4" action="{{route('new_services')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nombre del servicio:</label>
      <input type="text" class="form-control" name="service" id="" placeholder="Ingrese el nombre del servicio a registrar">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Precio:</label>
      <input type="text" class="form-control" name="price" id="" placeholder="Ingrese el precio del servicio a registrar">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Descripción del servicio y sus características:</label>
      <textarea class="form-control" name="description" id="" rows="4" placeholder="Ingrese una descripción del servicio a registrar"></textarea>
    </div>
    <div class="col text-center mt-4">
      <input type="submit" class="btn btn-success" value="Guardar servicio Nuevo">
    </div>
  </form>
</body>
</html>
