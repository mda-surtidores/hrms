@extends('layouts.master')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h3 class="page-title">Resultado de Aptitud</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Panel de Control</a></li>
                            <li class="breadcrumb-item">Trabajos</li>
                            <li class="breadcrumb-item active">Resultado de Aptitud</li>
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
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Título del Trabajo</th>
                                    <th>Departamento</th>
                                    <th>Puntuación por Categoría</th>
                                    <th>Puntuación Total</th>
                                    <th class="text-center">Estado</th>
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
                                    <td>html - <b>1</b><br>Nivel1 - <b>0</b><br></td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-dot-circle-o text-danger"></i> Acción pendiente								</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> CV seleccionado</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> CV Rechazado</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Aptitud Seleccionada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Aptitud rechazada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> videollamada seleccionada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Videollamada rechazada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Ofrecido</a>
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
                                    <td>html - <b>1</b><br>Nivel1 - <b>0</b><br></td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-dot-circle-o text-danger"></i> Acción pendiente								</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> CV seleccionado</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> CV Rechazado</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Aptitud Seleccionada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Aptitud rechazada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> videollamada seleccionada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Videollamada rechazada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Ofrecido</a>
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
                                    <td>html - <b>1</b><br>Nivel1 - <b>0</b><br></td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-dot-circle-o text-danger"></i> Acción pendiente								</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> CV seleccionado</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> CV Rechazado</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Aptitud Seleccionada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Aptitud rechazada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> videollamada seleccionada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Videollamada rechazada</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Ofrecido</a>
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
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
@endsection