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
                        <h3 class="page-title">Entrevistas</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Panel de Control</a></li>
                            <li class="breadcrumb-item">Trabajos</li>
                            <li class="breadcrumb-item">Panel de Usuario</li>
                            <li class="breadcrumb-item active">Entrevistas</li>
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

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-solid nav-justified flex-column">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Aptitud</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu1">Programar Entrevista</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div id="home" class="tab-pane show active">
                                    <div class="card-box">
                                    <div class="table-responsive">
                                        <table class="table table-striped custom-table mb-0 datatable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Título del Trabajo</th>
                                                    <th>Departamento</th>
                                                    <th class="text-center">Tipo de Trabajo</th>
                                                    <th class="text-center">Prueba de Aptitud</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="#">Desarrollador Web</a></td>
                                                    <td>Desarrollo</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa fa-dot-circle-o text-danger"></i> Tiempo Completo
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="job-aptitude.html" class="btn btn-primary aptitude-btn"><span>Haga Clic Aquí</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><a href="#">Desarrollador Web</a></td>
                                                    <td>Desarrollo</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa fa-dot-circle-o text-warning"></i> Tiempo Parcial
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="job-aptitude.html" class="btn btn-primary aptitude-btn"><span>Haga Clic Aquí</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><a href="#">Diseño Web</a></td>
                                                    <td>Desarrollo</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa fa-dot-circle-o text-warning"></i> Tiempo Parcial
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="job-aptitude.html" class="btn btn-primary aptitude-btn"><span>Haga Clic Aquí</span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                    <div class="card-box">
                                    <div class="table-responsive">
                                        <table class="table table-striped custom-table mb-0 datatable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Título del Trabajo</th>
                                                    <th>Departamento</th>
                                                    <th class="text-center">Tipo de Trabajo</th>
                                                    <th class="text-center">Prueba de Aptitud</th>
                                                    <th class="text-center">Programar Entrevista</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="#">Desarrollador Web</a></td>
                                                    <td>Desarrollo</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa fa-dot-circle-o text-danger"></i> Tiempo Completo
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary disabled"><span>Seleccionado</span></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary aptitude-btn" data-toggle="modal" data-target="#selectMyTime"><span>Seleccione su Hora Aquí</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="#">Diseño Web</a></td>
                                                    <td>Desarrollo</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa fa-dot-circle-o text-warning"></i> Tiempo Parcial
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary disabled"><span>Seleccionado</span></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary aptitude-btn" data-toggle="modal" data-target="#selectMyTime"><span>Seleccione su Hora Aquí</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="#">Desarrollador Web</a></td>
                                                    <td>Desarrollo</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa fa-dot-circle-o text-warning"></i> Tiempo Parcial
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary disabled"><span>Seleccionado</span></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary aptitude-btn" data-toggle="modal" data-target="#selectMyTime"><span>Seleccione su Hora Aquí</span></a>
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
            </div>
            <!-- /Content End -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->
        
    <!-- Modal -->
    <div id="selectMyTime" class="modal  custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Seleccione su Hora</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Día 1 <span class="text-danger">*</span></label>
                                <select class="form-control" name="designations" id="designations">
                                    <option value="">11.00am - 11.30am (24 Feb 2020) </option>
                                    <option value="">1.00pm - 1.30pm (25 Feb 2020) </option>
                                    <option value="">3.00pm - 3.30pm (26 Feb 2020) </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-btn delete-action mt-3">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-primary btn-block cancel-btn">Enviar</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-primary btn-block cancel-btn" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection