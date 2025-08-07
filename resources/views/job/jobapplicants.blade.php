@extends('layouts.master')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Solicitantes de Empleo</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Panel de Control</a></li>
                            <li class="breadcrumb-item active">Solicitantes de Empleo</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nombre</th>
                                    <th>Correo Electrónico</th>
                                    <th>Teléfono</th>
                                    <th>Fecha de Solicitud</th>
                                    <th class="text-center">Estado</th>
                                    <th>CV</th>
                                    <th class="text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apply_for_jobs as $key=>$apply )
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $apply->name }}</td>
                                    <td>{{ $apply->email }}</td>
                                    <td>{{ $apply->phone }}</td>
                                    <td>{{ date('d F, Y',strtotime($apply->created_at)) }}</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-info"></i> Nuevo
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Nuevo</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Contratado</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Rechazado</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Entrevistado</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="{{ url('cv/download/'.$apply->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Descargar</a></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fa fa-clock-o m-r-5"></i> Programar Entrevista</a>
                                            </div>
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
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
@endsection