@extends('main')
    @section('contenido-dinamico')
    <div class="card mt-4 mx-4">
      <div class="d-flex justify-content-between">
          <h4 class="card-header">Listado de Técnicos</h4>
          <div class="mt-3 pt-3 px-4">
              <a href="{{url('')}}"><i class="bx bxs-book-add"></i> Agregar</a>
          </div>
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
