@extends('main')
  @section('contenido-dinamico')
    <h1 class="mt-3 text-center">Registrar Equipos Nuevos</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <form class="m-4" action="{{route('new_equipments')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="" class="form-label">Nombre del equipo:</label>
        <input type="text" class="form-control" name="equipment" id="" placeholder="Ingrese el nombre del equipo a registrar">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Descripción del equipo y sus características:</label>
        <textarea class="form-control" name="description" id="" rows="3" placeholder="Ingrese una descripción del equipo a registrar"></textarea>
      </div>
      <div class="col text-center mt-4">
        <input type="submit" class="btn btn-success" value="Guardar Equipo Nuevo">
      </div>
    </form>
  @endsection
