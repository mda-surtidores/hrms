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
                    <h3 class="page-title">Panel de Trabajos</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel de Control</a></li>
                        <li class="breadcrumb-item">Trabajos</li>
                        <li class="breadcrumb-item active">Panel de Trabajos</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
    
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-briefcase"></i></span>
                        <div class="dash-widget-info">
                            <h3>110</h3>
                            <span>Trabajos</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-users"></i></span>
                        <div class="dash-widget-info">
                            <h3>40</h3>
                            <span>Buscadores de Empleo</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                        <div class="dash-widget-info">
                            <h3>374</h3>
                            <span>Empleados</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-clipboard"></i></span>
                        <div class="dash-widget-info">
                            <h3>220</h3>
                            <span>Solicitudes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 text-center d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Resumen</h3>
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <h3 class="card-title text-center">Últimos Trabajos</h3>
                                <ul class="list-group">
                                      <li class="list-group-item list-group-item-action">Desarrollador UI <span class="float-right text-sm text-muted">hace 1 hora</span></li>
                                      <li class="list-group-item list-group-item-action">Desarrollador Android <span class="float-right text-sm text-muted">hace 1 día</span></li>
                                      <li class="list-group-item list-group-item-action">Desarrollador IOS<span class="float-right text-sm text-muted">hace 2 días</span></li>
                                      <li class="list-group-item list-group-item-action">Desarrollador PHP<span class="float-right text-sm text-muted">hace 3 días</span></li>
                                      <li class="list-group-item list-group-item-action">Desarrollador UI<span class="float-right text-sm text-muted">hace 3 días</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Lista de Solicitantes</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-nowrap custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Título del Trabajo</th>
                                        <th>Departamentos</th>
                                        <th>Fecha de Inicio</th>
                                        <th>Fecha de Vencimiento</th>
                                        <th class="text-center">Tipos de Trabajo</th>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">CV</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                <a href="profile.html">John Doe <span>Diseñador Web</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.html">Desarrollador Web</a></td>
                                        <td>Desarrollo</td>
                                        <td>3 Mar 2019</td>
                                        <td>31 May 2019</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-danger"></i> Tiempo Completo
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Tiempo Completo</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Tiempo Parcial</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Prácticas</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporal</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Otro</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-danger"></i> Abierto
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Abierto</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Cerrado</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelado</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center"><a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="fa fa-download mr-1"></i> Descargar</a></td>
                                        <td class="text-center">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_job"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#delete_job"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                <a href="profile.html">Richard Miles <span>Desarrollador Web</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.html">Diseñador Web</a></td>
                                        <td>Diseño</td>
                                        <td>3 Mar 2019</td>
                                        <td>31 May 2019</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-success"></i> Tiempo Parcial
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Tiempo Completo</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Tiempo Parcial</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Prácticas</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporal</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Otro</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-success"></i> Cerrado
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Abierto</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Cerrado</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelado</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center"><a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="fa fa-download mr-1"></i> Descargar</a></td>
                                        <td class="text-center">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_job"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#delete_job"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                <a href="profile.html">John Smith <span>Desarrollador Android</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.html">Desarrollador Android</a></td>
                                        <td>Android</td>
                                        <td>3 Mar 2019</td>
                                        <td>31 May 2019</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-danger"></i> Prácticas
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Tiempo Completo</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Tiempo Parcial</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Prácticas</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporal</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Otro</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-danger"></i> Cancelado
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Abierto</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Cerrado</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelado</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center"><a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="fa fa-download mr-1"></i> Descargar</a></td>
                                        <td class="text-center">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_job"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#delete_job"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Candidatos Preseleccionados</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-nowrap custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Título del Trabajo</th>
                                        <th>Departamentos</th>
                                        <th class="text-center">Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                <a href="profile.html">John Doe <span>Diseñador Web</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.html">Diseñador Web</a></td>
                                        <td>Departamento</td>
                                        <td class="text-center">
                                            <div class="action-label">
                                                <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                    <i class="fa fa-dot-circle-o text-danger"></i>Ofrecido
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                <a href="profile.html">Richard Miles <span>Desarrollador Web</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.html">Desarrollador Web</a></td>
                                        <td>Departamento</td>
                                        <td class="text-center">
                                            <div class="action-label">
                                                <a class="btn btn-white btn-sm btn-rounded" href="#" >
                                                    <i class="fa fa-dot-circle-o text-danger"></i>Ofrecido
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                <a href="profile.html">John Smith <span>Desarrollador Android</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.html">Desarrollador Android</a></td>
                                        <td>Departamento</td>
                                        <td class="text-center">
                                            <div class="action-label">
                                                <a class="btn btn-white btn-sm btn-rounded" href="#" >
                                                    <i class="fa fa-dot-circle-o text-danger"></i>Ofrecido
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</div>
<!-- /Page Wrapper -->
@endsection