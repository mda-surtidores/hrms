@extends('layouts.master')
@section('content')
    @section('style')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <!-- checkbox style -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/checkbox-style.css') }}">
    @endsection
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Empleado</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Panel de Control</a></li>
                            <li class="breadcrumb-item active">Empleado</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Añadir Empleado</a>
                        <div class="view-icons">
                            <a href="{{ route('all/employee/card') }}" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                            <a href="{{ route('all/employee/list') }}" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
			<!-- /Page Header -->

            <!-- Search Filter -->
            <form action="{{ route('all/employee/list/search') }}" method="POST">
                @csrf
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" name="employee_id">
                            <label class="focus-label">ID de Empleado</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Nombre del Empleado</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Cargo</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <button type="sumit" class="btn btn-success btn-block"> Buscar </button>
                    </div>
                </div>
            </form>
            <!-- Search Filter -->


            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>ID de Empleado</th>
                                    <th>Correo Electrónico</th>
                                    <th>Móvil</th>
                                    <th class="text-nowrap">Fecha de Ingreso</th>
                                    <th>Rol</th>
                                    <th class="text-right no-sort">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $items )
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('employee/profile/'.$items->user_id) }}" class="avatar"><img alt="" src="{{ URL::to('/assets/images/'. $items->avatar) }}"></a>
                                            <a href="{{ url('employee/profile/'.$items->user_id) }}">{{ $items->name }}<span>{{ $items->position }}</span></a>
                                        </h2>
                                    </td>
                                    <td>{{ $items->user_id }}</td>
                                    <td>{{ $items->email }}</td>
                                    <td>{{ $items->phone_number }}</td>
                                    <td>{{ $items->join_date }}</td>
                                    <td>{{ $items->role_name }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('all/employee/view/edit/'.$items->user_id) }}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item" href="{{url('all/employee/delete/'.$items->user_id)}}"onclick="return confirm('¿Estás seguro de que quieres eliminarlo?')"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
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
        <!-- /Page Content -->

        <!-- Add Employee Modal -->
        <div id="add_employee" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Añadir Empleado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('all/employee/save') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Nombre Completo</label>
                                        <select class="select" id="name" name="name">
                                            <option value="">-- Seleccionar --</option>
                                            @foreach ($userList as $key=>$user )
                                                <option value="{{ $user->name }}" data-employee_id={{ $user->user_id }} data-email={{ $user->email }}>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Correo Electrónico <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" id="email" name="email" placeholder="Correo automático" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha de Nacimiento</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text" id="birth_date" name="birth_Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Género</label>
                                        <select class="select form-control" id="gender" name="gender">
                                            <option value="Male">Masculino</option>
                                            <option value="Female">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">ID de Empleado <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="employee_id" name="employee_id" placeholder="ID de empleado automático" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Gerente de Línea</label>
                                        <select class="select" id="company" name="line_manager">
                                            <option selected disabled>-- Seleccionar --</option>
                                            @foreach ($userList as $key=>$user )
                                                <option value="Soeng Souy">Soeng Souy</option>
                                                <option value="StarGame Kh">StarGame Kh</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-t-15">
                                <table class="table table-striped custom-table">
                                    <thead>
                                        <tr>
                                            <th>Permiso del Módulo</th>
                                            <th class="text-center">Leer</th>
                                            <th class="text-center">Escribir</th>
                                            <th class="text-center">Crear</th>
                                            <th class="text-center">Eliminar</th>
                                            <th class="text-center">Importar</th>
                                            <th class="text-center">Exportar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $key = 0;
                                            $key1 = 0;
                                        ?>
                                        @foreach ($permission_lists as $lists )
                                        <tr>
                                            <td>{{ $lists->permission_name }}</td>
                                            <input type="hidden" name="permission[]" value="{{ $lists->permission_name }}">
                                            <input type="hidden" name="id_count[]" value="{{ $lists->id }}">
                                            <td class="text-center">
                                                <input type="checkbox" class="option-input checkbox read{{ ++$key }}" id="read" name="read[]" value="Y"{{ $lists->read =="Y" ? 'checked' : ''}} >
                                                <input type="checkbox" class="option-input checkbox read{{ ++$key1 }}" id="read" name="read[]" value="N" {{ $lists->read =="N" ? 'checked' : ''}}>
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" class="option-input checkbox write{{ ++$key }}" id="write" name="write[]" value="Y" {{ $lists->write =="Y" ? 'checked' : ''}}>
                                                <input type="checkbox" class="option-input checkbox write{{ ++$key1 }}" id="write" name="write[]" value="N" {{ $lists->write =="N" ? 'checked' : ''}}>
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" class="option-input checkbox create{{ ++$key }}" id="create" name="create[]" value="Y" {{ $lists->create =="Y" ? 'checked' : ''}}>
                                                <input type="checkbox" class="option-input checkbox create{{ ++$key1 }}" id="create" name="create[]" value="N" {{ $lists->create =="N" ? 'checked' : ''}}>
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" class="option-input checkbox delete{{ ++$key }}" id="delete" name="delete[]" value="Y" {{ $lists->delete =="Y" ? 'checked' : ''}}>
                                                <input type="checkbox" class="option-input checkbox delete{{ ++$key1 }}" id="delete" name="delete[]" value="N" {{ $lists->delete =="N" ? 'checked' : ''}}>
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" class="option-input checkbox import{{ ++$key }}" id="import" name="import[]" value="Y" {{ $lists->import =="Y" ? 'checked' : ''}}>
                                                <input type="checkbox" class="option-input checkbox import{{ ++$key1 }}" id="import" name="import[]" value="N" {{ $lists->import =="N" ? 'checked' : ''}}>
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" class="option-input checkbox export{{ ++$key }}" id="export" name="export[]" value="Y" {{ $lists->export =="Y" ? 'checked' : ''}}>
                                                <input type="checkbox" class="option-input checkbox export{{ ++$key1 }}" id="export" name="export[]" value="N" {{ $lists->export =="N" ? 'checked' : ''}}>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Employee Modal -->
    </div>
    <!-- /Page Wrapper -->
@section('script')
    <script>
        $("input:checkbox").on('click', function()
        {
            var $box = $(this);
            if ($box.is(":checked"))
            {
                var group = "input:checkbox[class='" + $box.attr("class") + "']";
                $(group).prop("checked", false);
                $box.prop("checked", true);
            } else {
                $box.prop("checked", false);
            }
        });
    </script>

    <script>
        // select auto id and email
        $('#name').on('change',function()
        {
            $('#employee_id').val($(this).find(':selected').data('employee_id'));
            $('#email').val($(this).find(':selected').data('email'));
        });
    </script>
@endsection
@endsection
