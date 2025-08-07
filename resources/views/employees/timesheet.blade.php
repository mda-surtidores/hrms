
@extends('layouts.master')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
    
        <!-- Page Content -->
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Hoja de Horas</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Panel de Control</a></li>
                            <li class="breadcrumb-item active">Hoja de Horas</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_todaywork"><i class="fa fa-plus"></i> Añadir Trabajo de Hoy</a>
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
                                    <th>Empleado</th>
                                    <th>Fecha</th>
                                    <th>Proyectos</th>
                                    <th class="text-center">Horas Asignadas</th>
                                    <th class="text-center">Horas</th>
                                    <th class="d-none d-sm-table-cell">Descripción</th>
                                    <th class="text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                            <a href="profile.html">John Doe <span>Diseñador Web</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>Gestión de Oficina</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">7</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                            <a href="profile.html">Richard Miles <span>Desarrollador Web</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>Gestión de Proyectos</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">12</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                            <a href="profile.html">John Smith <span>Desarrollador Android</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>App de Videollamadas</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">12</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                            <a href="profile.html">Mike Litorus <span>Desarrollador IOS</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>Administración de Hospital</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">12</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                            <a href="profile.html">Wilmer Deluna <span>Líder de Equipo</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>Gestión de Oficina</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">7</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-12.jpg"></a>
                                            <a href="profile.html">Jeffrey Warden <span>Desarrollador Web</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>Gestión de Proyectos</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">12</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-13.jpg"></a>
                                            <a href="profile.html">Bernardo Galaviz <span>Desarrollador Web</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>App de Videollamadas</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">12</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
                                            <a href="profile.html">Lesley Grauer <span>Líder de Equipo</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>Administración de Hospital</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">12</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                            <a href="profile.html">Jeffery Lalor <span>Líder de Equipo</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>Desarrollo de Almacén</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">9</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-04.jpg"></a>
                                            <a href="profile.html">Loren Gatlin <span>Desarrollador Android</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>Gestión de Oficina</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">12</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-03.jpg"></a>
                                            <a href="profile.html">Tarah Shropshire <span>Desarrollador Android</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>Gestión de Proyectos</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">12</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-08.jpg"></a>
                                            <a href="profile.html">Catherine Manseau <span>Desarrollador Android</span></a>
                                        </h2>
                                    </td>
                                    <td>8 Mar 2019</td>
                                    <td>
                                        <h2>App de Videollamadas</h2>
                                    </td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">12</td>
                                    <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
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
        
        <!-- Add Today Work Modal -->
        <div id="add_todaywork" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Añadir Detalles del Trabajo de Hoy</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Proyecto <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Gestión de Oficina</option>
                                        <option>Gestión de Proyectos</option>
                                        <option>App de Videollamadas</option>
                                        <option>Administración de Hospital</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label>Fecha Límite <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control" type="text" value="5 May 2019" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Horas Totales <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="100" readonly>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Horas Restantes <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="60" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Fecha <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Horas <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Descripción <span class="text-danger">*</span></label>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Today Work Modal -->
        
        <!-- Edit Today Work Modal -->
        <div id="edit_todaywork" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Detalles del Trabajo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Proyecto <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Gestión de Oficina</option>
                                        <option>Gestión de Proyectos</option>
                                        <option>App de Videollamadas</option>
                                        <option>Administración de Hospital</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label>Fecha Límite <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control" type="text" value="5 May 2019" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Horas Totales <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="100" readonly>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Horas Restantes <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="60" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Fecha <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" value="03/03/2019" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Horas <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="9">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Descripción <span class="text-danger">*</span></label>
                                <textarea rows="4" class="form-control">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</textarea>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Today Work Modal -->
        
        <!-- Delete Today Work Modal -->
        <div class="modal custom-modal fade" id="delete_workdetail" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Eliminar Detalles del Trabajo</h3>
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
        <!-- Delete Today Work Modal -->
    </div>
    <!-- /Page Wrapper -->

    @section('script')
    
    @endsection
@endsection
