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
                        <h3 class="page-title">Detalles del Trabajo</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel de Control</a></li>
                            <li class="breadcrumb-item active">Detalles del Trabajo</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="row">
                <div class="col-md-8">
                    <div class="job-info job-widget">
                        <h3 class="job-title">{{ $job_view_detail[0]->job_title }}</h3>
                        <span class="job-dept">{{ $job_view_detail[0]->department }}</span>
                        <ul class="job-post-det">
                            <li><i class="fa fa-calendar"></i> Fecha de Publicación: <span class="text-blue">{{ date('d F, Y',strtotime($job_view_detail[0]->start_date)) }}</span></li>
                            <li><i class="fa fa-calendar"></i> Última Fecha: <span class="text-blue">{{ date('d F, Y',strtotime($job_view_detail[0]->expired_date)) }}</span></li>
                            <li><i class="fa fa-user-o"></i> Solicitudes: <span class="text-blue">4</span></li>
                            <li><i class="fa fa-eye"></i> Vistas: <span class="text-blue">3806</span></li>
                        </ul>
                    </div>
                    <div class="job-content job-widget">
                        <div class="job-desc-title"><h4>Descripción del Trabajo</h4></div>
                        <div class="job-description">
                            <p>{!!nl2br ($job_view_detail[0]->description) !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="job-det-info job-widget">
                        <a class="btn job-btn" href="#" data-toggle="modal" data-target="#edit_job">Editar</a>
                        <div class="info-list">
                            <span><i class="fa fa-bar-chart"></i></span>
                            <h5>Tipo de Trabajo</h5>
                            <p>{{ $job_view_detail[0]->job_type }}</p>
                        </div>
                        <div class="info-list">
                            <span><i class="fa fa-money"></i></span>
                            <h5>Salario</h5>
                            <p>{{ $job_view_detail[0]->salary_from }}$ - {{ $job_view_detail[0]->salary_to }}$</p>
                        </div>
                        <div class="info-list">
                            <span><i class="fa fa-suitcase"></i></span>
                            <h5>Experiencia</h5>
                            <p>{{ $job_view_detail[0]->experience }}</p>
                        </div>
                        <div class="info-list">
                            <span><i class="fa fa-ticket"></i></span>
                            <h5>Vacante</h5>
                            <p>{{ $job_view_detail[0]->no_of_vacancies }}</p>
                        </div>
                        <div class="info-list">
                            <span><i class="fa fa-map-signs"></i></span>
                            <h5>Ubicación</h5>
                            <p>{!!nl2br ($job_view_detail[0]->job_location) !!}</p>
                        </div>
                        <div class="info-list">
                            <p class="text-truncate"> 096-566-666
                            <br> <a href="https://www.souysoeng.com" title="soengsouy@example.com">soengsouy@example.com</a>
                            <br> <a href="https://www.souysoeng.com" target="_blank" title="https://www.souysoeng.com">https://www.souysoeng.com</a>
                            </p>
                        </div>
                        <div class="info-list text-center">
                            <a class="app-ends" href="#">La solicitud finaliza en 2d 7h 6m</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
        
        <!-- Edit Job Modal -->
        <div id="edit_job" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Trabajo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Título del Trabajo</label>
                                        <input class="form-control" type="text" value="Desarrollador Web">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Departamento</label>
                                        <select class="select">
                                            <option>-</option>
                                            <option selected="">Desarrollo Web</option>
                                            <option>Desarrollo de Aplicaciones</option>
                                            <option>Gestión de TI</option>
                                            <option>Gestión de Cuentas</option>
                                            <option>Gestión de Soporte</option>
                                            <option>Marketing</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ubicación del Trabajo</label>
                                        <input class="form-control" type="text" value="California">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No de Vacantes</label>
                                        <input class="form-control" type="text" value="5">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Experiencia</label>
                                        <input class="form-control" type="text" value="2 Años">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Edad</label>
                                        <input class="form-control" type="text" value="-">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Salario Desde</label>
                                        <input type="text" class="form-control" value="32k">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Salario Hasta</label>
                                        <input type="text" class="form-control" value="38k">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tipo de Trabajo</label>
                                        <select class="select">
                                            <option selected="">Tiempo Completo</option>
                                            <option>Tiempo Parcial</option>
                                            <option>Prácticas</option>
                                            <option>Temporal</option>
                                            <option>Remoto</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select class="select">
                                            <option selected="">Abierto</option>
                                            <option>Cerrado</option>
                                            <option>Cancelado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha de Inicio</label>
                                        <input type="text" class="form-control datetimepicker" value="3 Mar 2019">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha de Vencimiento</label>
                                        <input type="text" class="form-control datetimepicker" value="31 May 2019">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Job Modal -->
    </div>
    <!-- /Page Wrapper -->
@endsection