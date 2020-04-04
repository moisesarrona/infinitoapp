@extends('layouts.plantilla')

@section('title', 'Empresas')

@section('contenido')
    <!-- Mensaje -->
    @include('mensajes.satisfactorio')

    <!--Botones de direccion -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/usuario/" class="btn btn-info btn-icon-split">
            <span class="icon text-white-50">
                <i class="flaticon-box"></i>
            </span>
            <span class="text">Usuarios</span>
        </a>
    </div>

    <div class="row">
        <!-- Tabla -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Listado de empresas</h4>
                    <a href="empresa/create" class="btn btn-primary float-right">
                        <span class="btn-label">
                            <i class="flaticon-add"></i>
                        </span>
                        Agregar
                    </a>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th style="width: 10%">Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <<th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th style="width: 10%">Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($empresas as $empresa)
                                    <tr>
                                        <td>{{$empresa->nombre}}</td>
                                        <td>{{$empresa->telefono}}</td>
                                        <td>{{$empresa->correo}}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="/empresa/{{$empresa->id}}/" class=" btn btn-link btn-primary">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a href="/empresa/{{$empresa->id}}/edit" class="btn btn-link btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection