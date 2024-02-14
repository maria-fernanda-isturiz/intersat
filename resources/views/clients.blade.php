<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="mt-3 text-center">Nuestros Clientes</h1>
    <div class="col text-center mb-3">
      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalAddClient">Agregar nuevo cliente</button>
    </div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" class="text-center">Nombre</th>
            <th scope="col" class="text-center">Apellido</th>
            <th scope="col" class="text-center">Direccion</th>
            <th scope="col" class="text-center">Telefono</th>
            <th scope="col" class="text-center" colspan="2">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $clients as $client)
          <tr class="text-center">
            <td>{{$client->name}}</td>
            <td>{{$client->lastname}}</td>
            <td>{{$client->address}}</td>
            <td>{{$client->phone}}</td>
            <td>
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalClient{{$client->id}}">Actualizar</button>
            </td>
            <td>
              <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteClient{{$client->id}}">Eliminar</button>
            </td>
          </tr>

          <div class="modal" id="ModalAddClient" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Agregar Cliente Nuevo</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('new_clients')}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="modal-body">
                  <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="" placeholder="Ingrese el nombre del cliente">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Apellido</label>
                      <input type="text" class="form-control" name="lastname" id="" placeholder="Ingrese el apellido del cliente">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Direccion</label>
                      <input type="text" class="form-control" name="address" id="" placeholder="Ingrese la direccion del cliente">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Telefono</label>
                      <input type="number" class="form-control" name="phone" id="" placeholder="Ingrese el telefono del cliente">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Correo</label>
                      <input type="email" class="form-control" name="email" id="" placeholder="Ingrese el correo del cliente">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" name="password" id="" placeholder="Ingrese la contraseña del cliente">
                  </div>                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <input type="submit" class="btn btn-success" value="Agregar Cliente Nuevo">
                </div>
              </form>
              </div>
            </div>
          </div>

          <div class="modal" id="ModalClient{{$client->id}}" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Actualizar Cliente</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('edit_clients', $client->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="modal-body">
                  @csrf
                  <input type="hidden" value="{{$client->id}}">
                  <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="" value="{{$client->name}}">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Apellido</label>
                      <input type="text" class="form-control" name="lastname" id="" value="{{$client->lastname}}">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Direccion</label>
                      <input type="text" class="form-control" name="address" id="" value="{{$client->address}}">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Telefono</label>
                      <input type="number" class="form-control" name="phone" id="" value="{{$client->phone}}">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Correo</label>
                      <input type="email" class="form-control" name="email" id="" value="{{$client->email}}">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" name="password" id="" value="{{$client->password}}">
                  </div>                
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <input type="submit" class="btn btn-success" value="Actualizar Cliente">
                </div>
              </form>
              </div>
            </div>
          </div>
          <div class="modal" id="ModalDeleteClient{{$client->id}}" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Eliminar cliente</h5>
                  <form action="{{route('delete_client', $client->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="id" value="{{$client->id}}">
                  <div class="mb-3">
                    <label for="" class="form-label">¿Desea eliminar el cliente</label>
                    <ul class="list-group">
                      <li class="list-group-item">Nombre: {{$client->name}}</li>
                      <li class="list-group-item">Apellido: {{$client->lastname}}</li>
                      <li class="list-group-item">Direccion: {{$client->address}}</li>
                      <li class="list-group-item">Correo: {{$client->phone}}</li>
                    </ul>
                  </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  @csrf
                  <input type="submit" class="btn btn-danger" value="Eliminar Cliente">
                </div>
              </form>
              </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
