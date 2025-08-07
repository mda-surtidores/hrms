
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Principal</span>
                </li>
                <li class="{{set_active(['home','em/dashboard'])}} submenu">
                    <a href="#" class="{{ set_active(['home','em/dashboard']) ? 'noti-dot' : '' }}">
                        <i class="la la-dashboard"></i>
                        <span> Panel de Control</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['home'])}}" href="{{ route('home') }}">Panel de Administrador</a></li>
                        <li><a class="{{set_active(['em/dashboard'])}}" href="{{ route('em/dashboard') }}">Panel de Empleado</a></li>
                    </ul>
                </li>
                @if (Auth::user()->role_name=='Admin')
                    <li class="menu-title"> <span>Autenticación</span> </li>
                    <li class="{{set_active(['search/user/list','userManagement','activity/log','activity/login/logout'])}} submenu">
                        <a href="#" class="{{ set_active(['search/user/list','userManagement','activity/log','activity/login/logout']) ? 'noti-dot' : '' }}">
                            <i class="la la-user-secret"></i> <span>Control de Usuarios</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                            <li><a class="{{set_active(['search/user/list','userManagement'])}}" href="{{ route('userManagement') }}">Todos los Usuarios</a></li>
                        </ul>
                    </li>
                @endif
                <li class="menu-title"> <span>Empleados</span> </li>
                <li class="{{set_active(['all/employee/list','all/employee/list','all/employee/card','form/holidays/new','form/leaves/new',
                    'form/leaves/employee/new','form/leavesettings/page','attendance/page',
                    'attendance/employee/page','form/departments/page','form/designations/page',
                    'form/timesheet/page','form/shiftscheduling/page','form/overtime/page'])}} submenu">
                    <a href="#" class="{{ set_active(['all/employee/list','all/employee/card','form/holidays/new','form/leaves/new',
                    'form/leaves/employee/new','form/leavesettings/page','attendance/page',
                    'attendance/employee/page','form/departments/page','form/designations/page',
                    'form/timesheet/page','form/shiftscheduling/page','form/overtime/page']) ? 'noti-dot' : '' }}">
                        <i class="la la-user"></i> <span> Empleados</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['all/employee/list','all/employee/card'])}} {{ request()->is('all/employee/view/edit/*','employee/profile/*') ? 'active' : '' }}" href="{{ route('all/employee/card') }}">Todos los Empleados</a></li>
                        <li><a class="{{set_active(['form/holidays/new'])}}" href="{{ route('form/holidays/new') }}">Días Festivos</a></li>
                        <li><a class="{{set_active(['form/leaves/new'])}}" href="{{ route('form/leaves/new') }}">Vacaciones (Admin)
                            <span class="badge badge-pill bg-primary float-right">1</span></a>
                        </li>
                        <li><a class="{{set_active(['form/leaves/employee/new'])}}" href="{{route('form/leaves/employee/new')}}">Vacaciones (Empleado)</a></li>
                        <li><a class="{{set_active(['form/leavesettings/page'])}}" href="{{ route('form/leavesettings/page') }}">Configuración de Vacaciones</a></li>
                        <li><a class="{{set_active(['attendance/page'])}}" href="{{ route('attendance/page') }}">Asistencia (Admin)</a></li>
                        <li><a class="{{set_active(['attendance/employee/page'])}}" href="{{ route('attendance/employee/page') }}">Asistencia (Empleado)</a></li>
                        <li><a class="{{set_active(['form/departments/page'])}}" href="{{ route('form/departments/page') }}">Departamentos</a></li>
                        <li><a class="{{set_active(['form/designations/page'])}}" href="{{ route('form/designations/page') }}">Cargos</a></li>
                        <li><a class="{{set_active(['form/timesheet/page'])}}" href="{{ route('form/timesheet/page') }}">Hoja de Horas</a></li>
                        <li><a class="{{set_active(['form/shiftscheduling/page'])}}" href="{{ route('form/shiftscheduling/page') }}">Turnos y Horarios</a></li>
                        <li><a class="{{set_active(['form/overtime/page'])}}" href="{{ route('form/overtime/page') }}">Horas Extra</a></li>
                    </ul>
                </li>
                <li class="menu-title"> <span>RRHH</span> </li>
                <li class="{{set_active(['create/estimate/page','form/estimates/page','payments','expenses/page'])}} submenu">
                    <a href="#" class="{{ set_active(['create/estimate/page','form/estimates/page','payments','expenses/page']) ? 'noti-dot' : '' }}">
                        <i class="la la-files-o"></i>
                        <span> Ventas </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['create/estimate/page','form/estimates/page'])}} {{ request()->is('edit/estimate/*') ? 'active' : '' }}{{ request()->is('estimate/view/*') ? 'active' : '' }}" href="{{ route('form/estimates/page') }}">Presupuestos</a></li>
                        <li><a class="{{set_active(['payments'])}}" href="{{ route('payments') }}">Pagos</a></li>
                        <li><a class="{{set_active(['expenses/page'])}}" href="{{ route('expenses/page') }}">Gastos</a></li>
                    </ul>
                </li>
                <li class="{{set_active(['form/salary/page','form/payroll/items'])}} submenu">
                    <a href="#" class="{{ set_active(['form/salary/page','form/payroll/items']) ? 'noti-dot' : '' }}"><i class="la la-money"></i>
                    <span> Nómina </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['form/salary/page'])}}" href="{{ route('form/salary/page') }}"> Salario de Empleado </a></li>
                        <li><a href="{{ route('form/salary/page') }}"> Recibo de Sueldo </a></li>
                        <li><a class="{{set_active(['form/payroll/items'])}}" href="{{ route('form/payroll/items') }}"> Conceptos de Nómina </a></li>
                    </ul>
                </li>
                <li class="{{set_active(['form/expense/reports/page','form/invoice/reports/page','form/leave/reports/page','form/daily/reports/page','form/payments/reports/page','form/employee/reports/page'])}} submenu">
                    <a href="#" class="{{ set_active(['form/expense/reports/page','form/invoice/reports/page','form/leave/reports/page','form/daily/reports/page','form/payments/reports/page','form/employee/reports/page','form/attendance/reports/page']) ? 'noti-dot' : '' }}"><i class="la la-pie-chart"></i>
                    <span> Informes </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['form/expense/reports/page'])}}" href="{{ route('form/expense/reports/page') }}"> Informe de Gastos </a></li>
                        <li><a class="{{set_active(['form/invoice/reports/page'])}}" href="{{ route('form/invoice/reports/page') }}"> Informe de Facturas </a></li>
                        <li><a class="{{set_active(['form/payments/reports/page'])}}" href="{{ route('form/payments/reports/page') }}"> Informe de Pagos </a></li>
                        <li><a class="{{set_active(['form/employee/reports/page'])}}" href="{{ route('form/employee/reports/page') }}"> Informe de Empleados </a></li>
                        <li><a class="{{set_active(['form/payslip/reports/page'])}}" href="{{ route('form/payslip/reports/page') }}"> Informe de Recibos de Sueldo </a></li>
                        <li><a class="{{set_active(['form/attendance/reports/page'])}}" href="{{ route('form/attendance/reports/page') }}"> Informe de Asistencia </a></li>
                        <li><a class="{{set_active(['form/leave/reports/page'])}}" href="{{ route('form/leave/reports/page') }}"> Informe de Vacaciones </a></li>
                        <li><a class="{{set_active(['form/daily/reports/page'])}}" href="{{ route('form/daily/reports/page') }}"> Informe Diario </a></li>
                    </ul>
                </li>
                <li class="menu-title"> <span>Rendimiento</span> </li>
                <li class="{{set_active(['form/performance/indicator/page','form/performance/page','form/performance/appraisal/page'])}} submenu">
                    <a href="#" class="{{ set_active(['form/performance/indicator/page','form/performance/page','form/performance/appraisal/page']) ? 'noti-dot' : '' }}"><i class="la la-graduation-cap"></i>
                    <span> Rendimiento </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['form/performance/indicator/page'])}}" href="{{ route('form/performance/indicator/page') }}"> Indicador de Rendimiento </a></li>
                        <li><a class="{{set_active(['form/performance/page'])}}" href="{{ route('form/performance/page') }}"> Revisión de Rendimiento </a></li>
                        <li><a class="{{set_active(['form/performance/appraisal/page'])}}" href="{{ route('form/performance/appraisal/page') }}"> Evaluación de Rendimiento </a></li>
                    </ul>
                </li>
                <li class="{{set_active(['form/training/list/page','form/trainers/list/page'])}} submenu">
                    <a href="#" class="{{ set_active(['form/training/list/page','form/trainers/list/page']) ? 'noti-dot' : '' }}"><i class="la la-edit"></i>
                    <span> Capacitación </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['form/training/list/page'])}}" href="{{ route('form/training/list/page') }}"> Lista de Capacitaciones </a></li>
                        <li><a class="{{set_active(['form/trainers/list/page'])}}" href="{{ route('form/trainers/list/page') }}"> Capacitadores</a></li>
                        <li><a class="{{set_active(['form/training/type/list/page'])}}" href="{{ route('form/training/type/list/page') }}"> Tipo de Capacitación </a></li>
                    </ul>
                </li>
                <li class="menu-title"> <span>Administración</span> </li>
                <li> <a href="assets.html"><i class="la la-object-ungroup">
                    </i> <span>Activos</span></a>
                </li>
                <li class="{{set_active(['user/dashboard/index','jobs/dashboard/index','user/dashboard/all','user/dashboard/applied/jobs','user/dashboard/interviewing','user/dashboard/offered/jobs','user/dashboard/visited/jobs','user/dashboard/archived/jobs','user/dashboard/save','jobs','job/applicants','job/details','page/manage/resumes','page/shortlist/candidates','page/interview/questions','page/offer/approvals','page/experience/level','page/candidates','page/schedule/timing','page/aptitude/result'])}} submenu">
                    <a href="#" class="{{ set_active(['user/dashboard/index','jobs/dashboard/index','user/dashboard/all','user/dashboard/save','jobs','job/applicants','job/details']) ? 'noti-dot' : '' }}"><i class="la la-briefcase"></i>
                        <span> Trabajos </span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }} {{ (request()->is('job/applicants/*')) ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['user/dashboard/index','user/dashboard/all','user/dashboard/applied/jobs','user/dashboard/interviewing','user/dashboard/offered/jobs','user/dashboard/visited/jobs','user/dashboard/archived/jobs','user/dashboard/save'])}}" href="{{ route('user/dashboard/index') }}"> Panel de Usuario </a></li>
                        <li><a class="{{set_active(['jobs/dashboard/index'])}}" href="{{ route('jobs/dashboard/index') }}"> Panel de Trabajos </a></li>
                        <li><a class="{{set_active(['jobs','job/applicants','job/details'])}} {{ (request()->is('job/applicants/*','job/details/*')) ? 'active' : '' }}" href="{{ route('jobs') }} "> Gestionar Trabajos </a></li>
                        <li><a class="{{set_active(['page/manage/resumes'])}}" href="{{ route('page/manage/resumes') }}"> Gestionar CVs </a></li>
                        <li><a class="{{set_active(['page/shortlist/candidates'])}}" href="{{ route('page/shortlist/candidates') }}"> Candidatos Preseleccionados </a></li>
                        <li><a class="{{set_active(['page/interview/questions'])}}" href="{{ route('page/interview/questions') }}"> Preguntas de Entrevista </a></li>
                        <li><a class="{{set_active(['page/offer/approvals'])}}" href="{{ route('page/offer/approvals') }}"> Aprobación de Ofertas </a></li>
                        <li><a class="{{set_active(['page/experience/level'])}}" href="{{ route('page/experience/level') }}"> Nivel de Experiencia </a></li>
                        <li><a class="{{set_active(['page/candidates'])}}" href="{{ route('page/candidates') }}"> Lista de Candidatos </a></li>
                        <li><a class="{{set_active(['page/schedule/timing'])}}" href="{{ route('page/schedule/timing') }}"> Programar Horarios </a></li>
                        <li><a class="{{set_active(['page/aptitude/result'])}}" href="{{ route('page/aptitude/result') }}"> Resultados de Aptitud </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->