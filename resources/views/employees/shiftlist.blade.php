
@extends('layouts.master')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Lista de Turnos</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel de Control</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('all/employee/list') }}">Empleados</a></li>
                            <li class="breadcrumb-item active">Lista de Turnos</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn m-r-5" data-toggle="modal" data-target="#add_shift">Añadir Turnos</a>
                        <a href="#" class="btn add-btn m-r-5" data-toggle="modal" data-target="#add_schedule"> Asignar Turnos</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Content Starts -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre del Turno</th>
                                    <th>Hora de Inicio Mínima</th>
                                    <th>Hora de Inicio</th>
                                    <th>Hora de Inicio Máxima</th>
                                    <th>Hora de Fin Mínima</th>
                                    <th>Hora de Fin</th>
                                    <th>Hora de Fin Máxima</th>
                                    <th>Tiempo de Descanso</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-right no-sort">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Turno de las 10 en punto</td>
                                    <td>09:00:00 am</td>
                                    <td>10:00:00 am</td>
                                    <td>10:30:00 am</td>
                                    <td>06:00:00 pm</td>
                                    <td>06:30:00 pm</td>
                                    <td>07:00:00 pm</td>
                                    <td>30 minutos</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                                <i class="fa fa-dot-circle-o text-success"></i> Activo
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_shift"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Turno de las 10:30</td>
                                    <td>10:00:00 am</td>
                                    <td>10:30:00 am	</td>
                                    <td>11:00:00 am</td>
                                    <td>06:30:00 pm</td>
                                    <td>07:00:00 pm</td>
                                    <td>07:30:00 pm	</td>
                                    <td>45 minutos</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                                <i class="fa fa-dot-circle-o text-success"></i> Activo
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_shift"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ruta Diaria</td>
                                    <td>06:00:00 am</td>
                                    <td>06:30:00 am</td>
                                    <td>07:00:00 am</td>
                                    <td>03:00:00 pm</td>
                                    <td>03:30:00 pm</td>
                                    <td>04:00:00 pm</td>
                                    <td>60 minutos</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                                <i class="fa fa-dot-circle-o text-success"></i> Activo
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_shift"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Nuevo Turno</td>
                                    <td>06:11:00 am</td>
                                    <td>06:30:00 am</td>
                                    <td>08:12:00 am</td>
                                    <td>09:12:00 pm	</td>
                                    <td>09:30:00 pm</td>
                                    <td>09:45:00 pm</td>
                                    <td>45 minutos</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                                <i class="fa fa-dot-circle-o text-success"></i> Activo
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_shift"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Turno Recurrente</td>
                                    <td>08:30:00 am</td>
                                    <td>09:00:00 am</td>
                                    <td>09:30:00 am</td>
                                    <td>05:30:00 pm</td>
                                    <td>06:00:00 pm</td>
                                    <td>06:30:00 pm</td>
                                    <td>60 minutos</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                                <i class="fa fa-dot-circle-o text-success"></i> Activo
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_shift"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
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
     
        <!-- Add Shift Modal -->
        <div id="add_shift" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Añadir Turno</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Nombre del Turno <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" >
                                        <label>Hora de Inicio Mínima <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hora de Inicio <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>									
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hora de Inicio Máxima <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>											
                                    </div>
                                </div>		
                                <div class="col-md-4">
                                    <div class="form-group" >
                                        <label>Hora de Fin Mínima <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hora de Fin <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>									
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hora de Fin Máxima <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>											
                                    </div>
                                </div>	
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tiempo de Descanso (En Minutos) </label>
                                        <input type="text" class="form-control">											
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
                                        <label class="checkbox-inline"><input type="checkbox" value="monday" class="days recurring" checked=""><span class="checkmark">L</span></label>
    
                                        <label class="checkbox-inline"><input type="checkbox" value="tuesday" class="days recurring" checked=""><span class="checkmark">M</span></label>
                                    
                                        <label class="checkbox-inline"><input type="checkbox" value="wednesday" class="days recurring" checked=""><span class="checkmark">X</span></label>
                                    
                                        <label class="checkbox-inline"><input type="checkbox" value="thursday" class="days recurring" checked=""><span class="checkmark">J</span></label>
                                    
                                        <label class="checkbox-inline"><input type="checkbox" value="friday" class="days recurring" checked=""><span class="checkmark">V</span></label>
                                    
                                        <label class="checkbox-inline"><input type="checkbox" value="saturday" class="days recurring"><span class="checkmark">S</span></label>
                                    
                                        <label class="checkbox-inline"><input type="checkbox" value="sunday" class="days recurring"><span class="checkmark">D</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
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
                        
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Añadir Etiqueta </label>
                                        <input type="text" class="form-control">											
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Añadir Nota </label>
                                        <textarea class="form-control"></textarea>											
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
        <!-- /Add Shift Modal -->

        <!-- Edit Shift Modal -->
        <div id="edit_shift" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Turno</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Nombre del Turno <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" >
                                        <label>Hora de Inicio Mínima <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hora de Inicio <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>									
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hora de Inicio Máxima <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>											
                                    </div>
                                </div>		
                                <div class="col-md-4">
                                    <div class="form-group" >
                                        <label>Hora de Fin Mínima <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hora de Fin <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>									
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hora de Fin Máxima <span class="text-danger">*</span></label>
                                        <div class="input-group time timepicker">
                                            <input class="form-control"><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>											
                                    </div>
                                </div>	
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tiempo de Descanso (En Minutos) </label>
                                        <input type="text" class="form-control">											
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Turno Recurrente</label>
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
                                        <label class="checkbox-inline"><input type="checkbox" value="monday" class="days recurring" checked=""><span class="checkmark">L</span></label>
    
                                        <label class="checkbox-inline"><input type="checkbox" value="tuesday" class="days recurring" checked=""><span class="checkmark">M</span></label>
                                    
                                        <label class="checkbox-inline"><input type="checkbox" value="wednesday" class="days recurring" checked=""><span class="checkmark">X</span></label>
                                    
                                        <label class="checkbox-inline"><input type="checkbox" value="thursday" class="days recurring" checked=""><span class="checkmark">J</span></label>
                                    
                                        <label class="checkbox-inline"><input type="checkbox" value="friday" class="days recurring" checked=""><span class="checkmark">V</span></label>
                                    
                                        <label class="checkbox-inline"><input type="checkbox" value="saturday" class="days recurring"><span class="checkmark">S</span></label>
                                    
                                        <label class="checkbox-inline"><input type="checkbox" value="sunday" class="days recurring"><span class="checkmark">D</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Termina el <span class="text-danger">*</span></label>
                                        <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">Indefinido</label>
                                        </div>
                                </div>								
                        
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Añadir Etiqueta </label>
                                        <input type="text" class="form-control">											
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Añadir Nota </label>
                                        <textarea class="form-control"></textarea>											
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
        <!-- /Edit Shift Modal -->

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
            
        <!-- Delete Shift Modal -->
        <div class="modal custom-modal fade" id="delete_employee" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Eliminar Turno</h3>
                            <p>¿Estás seguro de que quieres eliminar?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Eliminar</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Employee Modal -->
      
    </div>
    <!-- Page Wrapper -->
@endsection
