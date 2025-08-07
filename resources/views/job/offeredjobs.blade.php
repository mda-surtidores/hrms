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
                        <h3 class="page-title">Trabajos Ofrecidos</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Panel de Control</a></li>
                            <li class="breadcrumb-item ">Trabajos</li>
                            <li class="breadcrumb-item ">Panel de Usuario</li>
                            <li class="breadcrumb-item active">Trabajos Ofrecidos</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <!-- Content Starts -->
            <div class="card">
                <div class="card-body">
                    @include('sidebar.sidebarjob')
                </div>
            </div>	
            
            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">  
                    <div class="form-group form-focus select-focus">
                        <select class="select floating"> 
                            <option>Seleccionar</option>
                            <option>Desarrollo</option>
                            <option>Diseño</option>
                            <option>Android</option>
                        </select>
                        <label class="focus-label">Departamento</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">  
                    <div class="form-group form-focus select-focus">
                        <select class="select floating"> 
                            <option>Seleccionar</option>
                            <option>Tiempo Completo</option>
                            <option>Tiempo Parcial</option>
                            <option>Prácticas</option>
                        </select>
                        <label class="focus-label">Tipo de Trabajo</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3"> 
                    <div class="form-group form-focus select-focus">
                        <select class="select floating"> 
                            <option>Seleccionar Designación</option>
                            <option>Desarrollador Web</option>
                            <option>Diseñador Web</option>
                            <option>Desarrollador Android</option>
                            <option>Desarrollador Ios</option>
                        </select>
                        <label class="focus-label">Designación</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">  
                    <a href="#" class="btn btn-success btn-block"> Buscar </a>
                </div>
            </div>
            <!-- Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título del Trabajo</th>
                                    <th>Departamento</th>
                                    <th class="text-center">Tipo de Trabajo</th>
                                    <th class="text-center">Acciones</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="job-details.html">Desarrollador Web</a></td>
                                    <td>Desarrollo</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Tiempo Completo
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-info download-offer"><span><i class="fa fa-download mr-1"></i> Descargar Oferta</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="job-details.html">Diseñador Web</a></td>
                                    <td>Diseño</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Tiempo Parcial
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-info download-offer"><span><i class="fa fa-download mr-1"></i> Descargar Oferta</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="job-details.html">Desarrollador Android</a></td>
                                    <td>Android</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Prácticas
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-info download-offer"><span><i class="fa fa-download mr-1"></i> Descargar Oferta</span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Content End -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
@endsection