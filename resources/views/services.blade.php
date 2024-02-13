@extends('main')
    @section('contenido-dinamico')
        <div class="card mt-4 mx-4">
            <div class="d-flex justify-content-between">
                <h4 class="card-header">Lista de Servicios</h4>
                <div class="mt-3 pt-3 px-4">
                    <a href="#"><i class="bx bxs-book-add"></i> Agregar</a>
                </div>
              
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Servicio</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   <!--foreach-->        
                </tbody>
            </table>
        
    @endsection