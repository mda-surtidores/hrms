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
                    <h3 class="page-title">Panel de Trabajo del Usuario</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Panel de Control</a></li>
                        <li class="breadcrumb-item">Trabajos</li>
                        <li class="breadcrumb-item">Panel de Usuario</li>
                        <li class="breadcrumb-item">Panel de Usuario</li>
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
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-file-text-o"></i></span>
                        <div class="dash-widget-info">
                            <h3>110</h3>
                            <span>Ofrecido</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-clipboard"></i></span>
                        <div class="dash-widget-info">
                            <h3>40</h3>
                            <span>Aplicado</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-retweet"></i></span>
                        <div class="dash-widget-info">
                            <h3>374</h3>
                            <span>Visitado</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-floppy-o"></i></span>
                        <div class="dash-widget-info">
                            <h3>220</h3>
                            <span>Guardado</span>
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
                                <h3 class="card-title">Visión General</h3>
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <h3 class="card-title text-center">Últimos Trabajos</h3>
                                <ul class="list-group">
                                    @foreach ($job_list as $key => $items)
                                    @php
                                        $date = $items->created_at;
                                        $date = Carbon\Carbon::parse($date);
                                        $elapsed =  $date->diffForHumans();
                                    @endphp
                                    <li class="list-group-item list-group-item-action">{{ $items->job_title }} <span class="float-right text-sm text-muted">{{ $elapsed }}</span></li>
                                    @endforeach
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
                        <h3 class="card-title mb-0">Trabajos Ofrecidos</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-nowrap custom-table mb-0">
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
                                    @foreach ($job_list as $key => $items)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td><a href="job-details.html">{{ $items->job_title }}</a></td>
                                        <td>{{ $items->department }}</td>
                                        <td class="text-center">
                                            <div class="action-label">
                                                <a class="btn btn-white btn-sm btn-rounded" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-danger"></i> {{ $items->job_type }}
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-info download-offer"><span><i class="fa fa-download mr-1"></i> Descargar Oferta</span></a>
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
                                    
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Trabajos Aplicados</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-nowrap custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Título del Trabajo</th>
                                        <th>Departamento</th>
                                        <th>Fecha de Inicio</th>
                                        <th>Fecha de Vencimiento</th>
                                        <th class="text-center">Tipo de Trabajo</th>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($job_list as $key => $items)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td><a href="job-details.html">{{ $items->job_title }}</a></td>
                                        <td>{{ $items->department }}</td>
                                        <td>{{ date('d F, Y',strtotime($items->start_date)) }}</td>
                                        <td>{{ date('d F, Y',strtotime($items->expired_date)) }}</td>
                                        <td class="text-center">
                                            <div class="action-label">
                                                <a class="btn btn-white btn-sm btn-rounded" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-danger"></i> {{ $items->job_type }}
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-label">
                                                <a class="btn btn-white btn-sm btn-rounded" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-danger"></i> {{ $items->status }}
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
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
        </div>
    
        <!-- /Content End -->
    </div>
    <!-- /Page Content -->
</div>
<!-- /Page Wrapper -->
@endsection