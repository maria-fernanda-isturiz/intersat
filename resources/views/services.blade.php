@extends('main')
    @section('contenido-dinamico')
    <div class="card mt-4 mx-4">
      <div class="d-flex justify-content-between">
          <h4 class="card-header">Listado de Servicios</h4>
          <div class="mt-3 pt-3 px-4">
              <a href="{{url('/add_services')}}"><i class="bx bxs-book-add"></i> Agregar</a>
          </div>
      </div>    
    
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" class="text-center">Nombre</th>
            <th scope="col" class="text-center">Precio</th>
            <th scope="col" class="text-center">Descripción</th>
            <th scope="col" class="text-center">Estado</th>
            <th scope="col" class="text-center">Actualizar</th>
            <th scope="col" class="text-center">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($services as $service)
          <tr class="text-center">
            <td>{{$service->service}}</td>
            <td>{{$service->price}}</td>
            <td>{{$service->description}}</td>
            <td>{{$service->status}}</td>
            <td>
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalServices{{$service->id}}">Actualizar</button>
            </td>
            <td>
              <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalDeleteServices{{$service->id}}">Eliminar</button>
            </td>
          </tr>

          <div class="modal" id="ModalServices{{$service->id}}" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Actualizar Servicio</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('edit_services', $service->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="modal-body">
                  @csrf
                  <input type="hidden" name="id_service" value="{{$service->id}}">
                  <div class="mb-3">
                    <label for="" class="form-label">Nombre del servicio:</label>
                    <input type="text" class="form-control" name="service" id="" placeholder="Ingrese el nuevo nombre del servicio a actualizar" value="{{$service->service}}">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Precio del servicio:</label>
                    <input type="text" class="form-control" name="price" id="" placeholder="Ingrese el nuevo precio del servicio a actualizar" value="{{$service->price}}">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Descripción del servicio y sus características:</label>
                    <textarea class="form-control" id="" name="description" rows="3" placeholder="Ingrese una descripción nueva del servicio a actualizar" value="{{$service->description}}"></textarea>
                  </div>                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <input type="submit" class="btn btn-success" value="Actualizar Servicio">
                </div>
              </form>
              </div>
            </div>
          </div>

          <div class="modal" id="ModalDeleteServices{{$service->id}}" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Eliminar Servicio</h5>
                  <form action="{{route('delete_services', $service->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="id_service" value="{{$service->id}}">
                  <div class="mb-3">
                    <label for="" class="form-label">¿Desea eliminar el servicio y dejar el dispositivo fuera de servicio?</label>
                    <select name="status" id="" class="form-control">
                    @foreach ($service_status as $status)
                        <option value="{{$status->id}}">{{$status->status}}</option>
                    @endforeach
                  </select>
                  </div>
                  <p>¿Está seguro que desea eliminar el servicio? Una vez se ha eliminado del inventario, no se puede recuperar la información del servicio.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  @csrf
                  <input type="submit" class="btn btn-danger" value="Eliminar Servicio">
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
  
