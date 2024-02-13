<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tecnicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="mt-3 text-center">Nuestros Tecnicos</h1>
    <div class="col text-center mb-3">
      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalAddTechnician">Agregar nuevo tecnico</button>
    </div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" class="text-center">Nombre</th>
            <th scope="col" class="text-center">Apellido</th>
            <th scope="col" class="text-center">Direccion</th>
            <th scope="col" class="text-center">Telefono</th>
            <th scope="col" class="text-center">Editar</th>
            <th scope="col" class="text-center">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $technicians as $technician)
          <tr class="text-center">
            <td>{{$technician->name}}</td>
            <td>{{$technician->lastname}}</td>
            <td>{{$technician->address}}</td>
            <td>{{$technician->phone}}</td>
            <td>
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalEquipment{{$technician->id}}"><i class='bx bxs-edit'></i></button>
            </td>
            <td>
              <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteEquipment{{$technician->id}}"><i class='bx bxs-eraser'></i></button>
            </td>
          </tr>

          <div class="modal" id="ModalAddTechnician" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Agregar Tecnico Nuevo</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('new_technicians')}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <input type="submit" class="btn btn-success" value="Agregar Tecnico Nuevo">
                </div>
              </form>
              </div>
            </div>
          </div>

          <div class="modal" id="ModalTechnician{{$technician->id}}" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Actualizar Tecnico</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('edit_technicians', $technician->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="modal-body">
                  @csrf
                  <input type="hidden" name="id_equipment" value="{{$technician->id}}">
                  <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="" value="{{$technician->name}}">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Apellido</label>
                      <input type="text" class="form-control" name="lastname" id="" value="{{$technician->lastname}}">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Direccion</label>
                      <input type="text" class="form-control" name="address" id="" value="{{$technician->address}}">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Telefono</label>
                      <input type="number" class="form-control" name="phone" id="" value="{{$technician->phone}}">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Correo</label>
                      <input type="email" class="form-control" name="email" id="" value="{{$technician->email}}">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" name="password" id="" value="{{$technician->password}}">
                  </div>                
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <input type="submit" class="btn btn-success" value="Actualizar Tecnico">
                </div>
              </form>
              </div>
            </div>
          </div>
          <div class="modal" id="ModalDeleteTechnician{{$technician->id}}" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Eliminar tecnico</h5>
                  <form action="{{route('delete_technician', $technician->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="id" value="{{$technician->id}}">
                  <div class="mb-3">
                    <label for="" class="form-label">¿Desea eliminar el tecnico</label>
                    <ul class="list-group">
                      <li class="list-group-item">Nombre: {{$technician->name}}</li>
                      <li class="list-group-item">Apellido: {{$technician->lastname}}</li>
                      <li class="list-group-item">Direccion: {{$technician->address}}</li>
                      <li class="list-group-item">Correo: {{$technician->phone}}</li>
                    </ul>
                  </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  @csrf
                  <input type="submit" class="btn btn-danger" value="Eliminar Tecnico">
                </div>
              </form>
              </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection
