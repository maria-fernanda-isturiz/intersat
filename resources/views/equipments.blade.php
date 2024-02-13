<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuestros equipos disponibles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="mt-3 text-center">Nuestros equipos disponibles</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="col text-center mb-3">
      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalAddEquipment">Agregar equipos nuevos</button>
    </div>
    <table class="table table-hover">
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
            <td>
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalEquipment{{$equipment->id}}"><i class='bx bxs-edit'></i></button>
            </td>
            <td>
              <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteEquipment{{$equipment->id}}"><i class='bx bxs-eraser'></i></button>
            </td>
          </tr>

          <div class="modal" id="ModalAddEquipment" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Agregar Equipo Nuevo</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('new_equipments')}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="modal-body">
                  <div class="mb-3">
                    <label for="" class="form-label">Nombre del equipo:</label>
                    <input type="text" class="form-control" name="equipment" id="" placeholder="Ingrese el nombre del equipo nuevo a agregar" value="">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Descripción del equipo y sus características:</label>
                    <textarea class="form-control" id="" name="description" rows="3" placeholder="Ingrese una descripción nueva del equipo a actualizar" value=""></textarea>
                  </div>                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <input type="submit" class="btn btn-success" value="Agregar Equipo Nuevo">
                </div>
              </form>
              </div>
            </div>
          </div>

          <div class="modal" id="ModalEquipment{{$equipment->id}}" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Editar Equipo</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('edit_equipments', $equipment->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="modal-body">
                  @csrf
                  <input type="hidden" name="id_equipment" value="{{$equipment->id}}">
                  <div class="mb-3">
                    <label for="" class="form-label">Nombre del equipo:</label>
                    <input type="text" class="form-control" name="equipment" id="" placeholder="Ingrese el nuevo nombre del equipo a actualizar" value="{{$equipment->name}}">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Descripción del equipo y sus características:</label>
                    <textarea class="form-control" id="" name="description" rows="3" placeholder="Ingrese una descripción nueva del equipo a actualizar" value="{{$equipment->description}}"></textarea>
                  </div>                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <input type="submit" class="btn btn-success" value="Actualizar">
                </div>
              </form>
              </div>
            </div>
          </div>
        
        <!--modal eliminar equipo-->
          <div class="modal" id="ModalDeleteEquipment{{$equipment->id}}" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Eliminar</h5>
                  <form action="{{route('delete_equipment', $equipment->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="id_equipment" value="{{$equipment->id}}">
                  <div class="mb-3">
                    <label for="" class="form-label">¿Desea eliminar el equipo y dejar el dispositivo fuera de servicio? Cambie el estado de disponible a inactivo</label>
                    <select name="status" id="" class="form-control">
                    @foreach ($equipment_status as $status)
                        <option value="{{$status->id}}">{{$status->status}}</option>
                    @endforeach
                  </select>
                  </div>
                  <p>¿Está seguro que desea eliminar el equipo? Una vez se ha eliminado del inventario, no se puede recuperar la información del equipo.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  @csrf
                  <input type="submit" class="btn btn-warning" value="Eliminar">
                </div>
              </form>
              </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>