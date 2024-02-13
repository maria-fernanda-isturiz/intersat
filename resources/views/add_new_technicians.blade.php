<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar tecnicos nuevos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <h1 class="mt-3 text-center">Registrar Tecnicos Nuevos</h1>
  <form class="m-4" action="{{route('new_technicians')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="name" id="" placeholder="Ingrese el nombre del tecnico">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="lastname" id="" placeholder="Ingrese el apellido del tecnico">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="address" id="" placeholder="Ingrese la direccion del tecnico">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input type="number" class="form-control" name="phone" id="" placeholder="Ingrese el telefono del tecnico">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input type="email" class="form-control" name="email" id="" placeholder="Ingrese el correo del tecnico">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" id="" placeholder="Ingrese el telefono del tecnico">
    </div>
    <div class="col text-center mt-4">
        <input type="submit" class="btn btn-success" value="Guardar Tecnico Nuevo">
    </div>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
