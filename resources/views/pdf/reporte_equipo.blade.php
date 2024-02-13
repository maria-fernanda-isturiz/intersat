<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Reporte Equipos</title>
</head>
<style>
    h1{
        color:darkgreen;
        text-align: center;
    }
</style>
<body>
    <h1>Reporte de Equipos</h1>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" class="text-center">Nombre</th>
            <th scope="col" class="text-center">Descripción</th>
            <th scope="col" class="text-center">Estado</th>
            <th scope="col" class="text-center">Editar</th>
            <th scope="col" class="text-center">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $equipments as $equipment)
          <tr class="text-center">
            <td>{{$equipment->name}}</td>
            <td>{{$equipment->description}}</td>
            <td>{{$equipment->status}}</td>
          </tr>
        </tbody>
    </table>
</body>
</html>