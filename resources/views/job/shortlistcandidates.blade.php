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
                        <h3 class="page-title">Candidatos Preseleccionados</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Panel de Control</a></li>
                            <li class="breadcrumb-item">Trabajos</li>
                            <li class="breadcrumb-item active">Candidatos Preseleccionados</li>
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
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Ofrecido
                                            </a>
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
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Ofrecido
                                            </a>
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
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Ofrecido
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
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->

@endsection