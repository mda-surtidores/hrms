
@extends('layouts.master')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Programación Diaria</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel de Control</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('all/employee/list') }}">Empleados</a></li>
                            <li class="breadcrumb-item active">Programación de Turnos</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('form/shiftlist/page') }}" class="btn add-btn m-r-5">Turnos</a>
                        <a href="#" class="btn add-btn m-r-5" data-toggle="modal" data-target="#add_schedule"> Asignar Turnos</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->


            <!-- Content Starts -->
            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">  
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Empleado</label>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3"> 
                    <div class="form-group form-focus select-focus">
                        <select class="select floating"> 
                            <option>Todos los Departamentos</option>
                            <option value="1">Finanzas</option>
                            <option value="2">Finanzas y Gestión</option>
                            <option value="3">RRHH y Finanzas</option>
                            <option value="4">ITech</option>
                        </select>
                        <label class="focus-label">Departamento</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">  
                    <div class="form-group form-focus focused">
                        <div class="cal-icon">
                            <input class="form-control floating datetimepicker" type="text">
                        </div>
                        <label class="focus-label">Desde</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">  
                    <div class="form-group form-focus focused">
                        <div class="cal-icon">
                            <input class="form-control floating datetimepicker" type="text">
                        </div>
                        <label class="focus-label">Hasta</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">  
                    <a href="#" class="btn btn-success btn-block"> Buscar </a>
                </div>     
            </div>
            <!-- Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Turno Programado</th>
                                    <th>Vie 21</th>
                                    <th>Sáb 22</th>
                                    <th>Dom 23</th>
                                    <th>Lun 24</th>
                                    <th>Mar 25</th>
                                    <th>Mié 26</th>
                                    <th>Jue 27</th>
                                    <th>Vie 28</th>
                                    <th>Sáb 29</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}"></a>
                                            <a href="profile.html">John Doe <span>Diseñador Web</span></a>
                                        </h2>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}"></a>
                                            <a href="profile.html">Richard Miles <span>Desarrollador Web</span></a>
                                        </h2>
                                    </td>
                                    
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-10.jpg') }}"></a>
                                            <a href="profile.html">John Smith <span>Desarrollador Android</span></a>
                                        </h2>
                                    </td>
                                    
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg') }}"></a>
                                            <a href="profile.html">Mike Litorus <span>Desarrollador IOS</span></a>
                                        </h2>
                                    </td>
                                    
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-11.jpg') }}"></a>
                                            <a href="profile.html">Wilmer Deluna <span>Líder de Equipo</span></a>
                                        </h2>
                                    </td>
                                    
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-12.jpg') }}"></a>
                                            <a href="profile.html">Jeffrey Warden <span>Desarrollador Web</span></a>
                                        </h2>
                                    </td>
                                    
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="{{ URL::to('assets/img/profiles/avatar-13.jpg') }}"></a>
                                            <a href="profile.html">Bernardo Galaviz <span>Desarrollador Web</span></a>
                                        </h2>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <h2>
                                                <a href="#" data-toggle="modal" data-target="#edit_schedule" style="border:2px dashed #1eb53a">
                                                <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 h 15 min)</span>
                                                <span class="userrole-info">Diseñador Web - SMARTHR</span>
                                                </a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-add-shedule-list">
                                            <a href="#" data-toggle="modal" data-target="#add_schedule">
                                            <span><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>
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
     
        <!-- Add Schedule Modal -->
        <div id="add_schedule" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Añadir Horario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Departamento <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value="">Seleccionar</option>
                                            <option value="">Desarrollo</option>
                                            <option value="1">Finanzas</option>
                                            <option value="2">Finanzas y Gestión</option>
                                            <option value="3">RRHH y Finanzas</option>
                                            <option value="4">ITech</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Nombre del Empleado <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value="">Seleccionar </option>
                                            <option value="1">Richard Miles </option>
                                            <option value="2">John Smith</option>
                                            <option value="3">Mike Litorus </option>
                                            <option value="4">Wilmer Deluna</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Fecha</label>
                                        <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Turnos <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value="">Seleccionar </option>
                                            <option value="1">Turno de las 10 en punto</option>
                                            <option value="2">Turno de las 10:30</option>
                                            <option value="3">Turno Diario </option>
                                            <option value="4">Nuevo Turno</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Inicio Mínima  <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Inicio  <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Inicio Máxima  <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Fin Mínima  <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Fin   <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Fin Máxima <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Tiempo de Descanso  <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Aceptar Horas Extra </label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                                            <label class="custom-control-label" for="customSwitch1"></label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Publicar </label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch2" checked="">
                                            <label class="custom-control-label" for="customSwitch2"></label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Schedule Modal -->
        
        <!-- Edit Schedule Modal -->
        <div id="edit_schedule" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Horario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Departamento <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value="">Seleccionar</option>
                                            <option selected value="">Desarrollo</option>
                                            <option value="1">Finanzas</option>
                                            <option value="2">Finanzas y Gestión</option>
                                            <option value="3">RRHH y Finanzas</option>
                                            <option value="4">ITech</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Nombre del Empleado <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value="">Seleccionar </option>
                                            <option selected value="1">Richard Miles </option>
                                            <option value="2">John Smith</option>
                                            <option value="3">Mike Litorus </option>
                                            <option value="4">Wilmer Deluna</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Fecha <span class="text-danger">*</span></label>
                                        <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Turnos <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value="">Seleccionar </option>
                                            <option value="1">Turno de las 10 en punto</option>
                                            <option value="2">Turno de las 10:30</option>
                                            <option value="3">Turno Diario </option>
                                            <option  selected value="4">Nuevo Turno</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Inicio Mínima  <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="06:11 am">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Inicio  <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="06:30 am">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Inicio Máxima  <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="08:12 am">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Fin Mínima  <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="09:12 pm">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Fin   <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="09:30 pm">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Hora de Fin Máxima <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="09:45 pm">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Tiempo de Descanso  <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="45">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Turno Recurrente</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Repetir Cada</label>
                                        <select class="select">
                                            <option value="">1 </option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                            <option  selected value="4">5</option>
                                            <option value="3">6</option>
                                        </select>
                                        <label class="col-form-label">Semana(s)</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group wday-box">
                                        
                                            <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="monday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">L</span></label>
        
                                            <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="tuesday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">M</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="wednesday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">X</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="thursday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">J</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="friday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">V</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="saturday" class="days recurring" onclick="return false;"><span class="checkmark">S</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="sunday" class="days recurring" onclick="return false;"><span class="checkmark">D</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Termina el <span class="text-danger">*</span></label>
                                        <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Indefinido</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Aceptar Horas Extra </label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked="">
                                            <label class="custom-control-label" for="customSwitch3"></label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Publicar </label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                                            <label class="custom-control-label" for="customSwitch4"></label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Schedule Modal -->
    </div>
    <!-- Page Wrapper -->
@endsection
