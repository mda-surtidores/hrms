@extends('layouts.master')
@section('content')
    {{-- message --}}
    
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Preguntas de la Entrevista</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Panel de Control</a></li>
                            <li class="breadcrumb-item">Trabajos</li>
                            <li class="breadcrumb-item active">Preguntas de la Entrevista</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn mb-1" data-toggle="modal" data-target="#add_question"><i class="fa fa-plus"></i> Añadir Pregunta</a>
                        <a href="#" class="btn add-btn mr-1 mb-1" data-toggle="modal" data-target="#add_category"><i class="fa fa-plus"></i> Añadir Categoría</a>
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
                                    <th>No</th>
                                    <th>Preguntas</th>
                                    <th hidden></th>
                                    <th hidden></th>
                                    <th hidden></th>
                                    <th hidden></th>
                                    <th hidden></th>
                                    <th hidden></th>
                                    <th hidden></th>
                                    <th>Opción A</th>
                                    <th>Opción B</th>
                                    <th>Opción C</th>
                                    <th>Opción D</th>
                                    <th class="text-center">Respuesta Correcta</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($question as $key=>$questions)
                                <tr>
                                    <td class="id">{{ ++$key }}</td>
                                    <td class="e_id" hidden>{{ $questions->id }}</td>
                                    <td>{{ Str::limit($questions->questions, 20) }}</td>
                                    <td class="questions" hidden>{{ $questions->questions }}</td>
                                    <td class="option_a">{{ $questions->option_a }}</td>
                                    <td class="option_b">{{ $questions->option_b }}</td>
                                    <td class="option_c">{{ $questions->option_c }}</td>
                                    <td class="option_d">{{ $questions->option_d }}</td>
                                    <td class="category" hidden>{{ $questions->category }}</td>
                                    <td class="department" hidden>{{ $questions->department }}</td>
                                    <td class="code_snippets" hidden>{{ $questions->code_snippets }}</td>
                                    <td class="answer_explanation" hidden>{{ $questions->answer_explanation }}</td>
                                    <td class="video_link" hidden>{{ $questions->video_link }}</td>
                                    <td class="text-center answer">{{ $questions->answer }}</td>
                                    <td class="text-center">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item edit_question" href="#" data-toggle="modal" data-target="#edit_question"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item delete_question" href="#" data-toggle="modal" data-target="#delete_job"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
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

        <!-- Add Category Modal -->
        <div id="add_category" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Añadir Categoría</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('save/category') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Añadir Categoría</label>
                                        <input class="form-control @error('category') is-invalid @enderror" type="text" name="category">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Cancelar</button>
                                <button type="submit" class="btn btn-primary submit-btn">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Questions Modal -->
    
        <!-- Add Questions Modal -->
        <div id="add_question" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Añadir Preguntas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('save/questions') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Añadir Categoría</label>
                                        <select class="select  @error('category') is-invalid @enderror" name="category">
                                            <option selected disabled> --Seleccionar --</option>
                                            @foreach ($category as $categorys )
                                            <option value="{{ $categorys->category }}" {{ old('category') == $categorys->category ? "selected" :""}}>{{ $categorys->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Departamento</label>
                                        <select class="select @error('department') is-invalid @enderror" name="department">
                                            <option selected disabled> --Seleccionar --</option>
                                            @foreach ($department as $departments )
                                            <option value="{{ $departments->department }}" {{ old('department') == $departments->department ? "selected" :""}}>{{ $departments->department }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Añadir Preguntas</label>
                                        <textarea class="form-control @error('questions') is-invalid @enderror" name="questions">{{ old('questions') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Opción A</label>
                                        <input class="form-control @error('option_a') is-invalid @enderror" type="text" name="option_a" value="{{ old('option_a') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Opción B</label>
                                        <input class="form-control @error('option_b') is-invalid @enderror" type="text" name="option_b" value="{{ old('option_b') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Opción C</label>
                                        <input class="form-control @error('option_c') is-invalid @enderror" type="text" name="option_c" value="{{ old('option_c') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Opción D</label>
                                        <input class="form-control @error('option_d') is-invalid @enderror" type="text" name="option_d" value="{{ old('option_d') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Respuesta Correcta</label>
                                        <select class="select @error('answer') is-invalid @enderror" name="answer">
                                            <option selected disabled> --Seleccionar --</option>
                                            @foreach ($answer as $answers )
                                            <option value="{{ $answers->answer }}" {{ old('answer') == $answers->answer ? "selected" :""}}>{{ $answers->answer }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fragmentos de Código</label>
                                        <textarea class="form-control @error('code_snippets') is-invalid @enderror" name="code_snippets">{{ old('code_snippets') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Explicación de la Respuesta</label>
                                        <textarea class="form-control @error('answer_explanation') is-invalid @enderror" name="answer_explanation">{{ old('answer_explanation') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Añadir Enlace de Video</label>
                                        <input class="form-control @error('video_link') is-invalid @enderror" type="text" name="video_link" value="{{ old('video_link') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Añadir Imagen a la Pregunta</label>
                                        <input class="form-control @error('image_to_question') is-invalid @enderror" type="file" name="image_to_question">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Cancelar</button>
                                <button type="submit" class="btn btn-primary submit-btn">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Questions Modal -->

        <!-- Edit Job Modal -->
        <div id="edit_question" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Preguntas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('questions/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control" type="hidden" id="e_id" name="id" value="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Añadir Categoría</label>
                                        <select class="select" name="category" id="e_category">
                                            <option selected disabled> --Seleccionar --</option>
                                            @foreach ($category as $categorys )
                                            <option value="{{ $categorys->category }}" {{ old('category') == $categorys->category ? "selected" :""}}>{{ $categorys->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Departamento</label>
                                        <select class="select" name="department" id="e_department">
                                            <option selected disabled> --Seleccionar --</option>
                                            @foreach ($department as $departments )
                                            <option value="{{ $departments->department }}" {{ old('department') == $departments->department ? "selected" :""}}>{{ $departments->department }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Añadir Preguntas</label>
                                        <textarea class="form-control" name="questions" id="e_questions"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Opción A</label>
                                        <input class="form-control" type="text" name="option_a" id="e_option_a" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Opción B</label>
                                        <input class="form-control" type="text" name="option_b" id="e_option_b" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Opción C</label>
                                        <input class="form-control" type="text" name="option_c" id="e_option_c" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Opción D</label>
                                        <input class="form-control" type="text" name="option_d" id="e_option_d" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Respuesta Correcta</label>
                                        <select class="select" name="answer" id="e_answer">
                                            <option selected disabled> --Seleccionar --</option>
                                            @foreach ($answer as $answers )
                                            <option value="{{ $answers->answer }}" {{ old('answer') == $answers->answer ? "selected" :""}}>{{ $answers->answer }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fragmentos de Código</label>
                                        <textarea class="form-control" name="code_snippets" id="e_code_snippets"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Explicación de la Respuesta</label>
                                        <textarea class="form-control" name="answer_explanation" id="e_answer_explanation"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Añadir Enlace de Video</label>
                                        <input class="form-control" type="text" name="video_link" id="e_video_link" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Añadir Imagen a la Pregunta</label>
                                        <input class="form-control" type="file" name="image_to_question">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Cancelar</button>
                                <button type="submit" class="btn btn-primary submit-btn">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Job Modal -->

        <!-- Delete Job Modal -->
        <div class="modal custom-modal fade" id="delete_job" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Eliminar</h3>
                            <p>¿Estás seguro de que quieres eliminar?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <form action="{{ route('questions/delete') }}" method="POST">
                                @csrf
                                <input type="hidden" class="e_id" name="id" value="">
                                <input type="hidden" class="e_id" name="id" value="">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary continue-btn submit-btn">Eliminar</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancelar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>z
        </div>
        <!-- /Delete Job Modal -->
    </div>
    <!-- /Page Wrapper -->

    @section('script')
        {{-- update --}}
        <script>
            $(document).on('click','.edit_question',function()
            {
                var _this = $(this).parents('tr');
                $('#e_id').val(_this.find('.id').text());
                $('#e_questions').val(_this.find('.questions').text());
                $('#e_option_a').val(_this.find('.option_a').text());
                $('#e_option_b').val(_this.find('.option_b').text());
                $('#e_option_c').val(_this.find('.option_c').text());
                $('#e_option_d').val(_this.find('.option_d').text());
                $('#e_code_snippets').val(_this.find('.code_snippets').text());
                $('#e_answer_explanation').val(_this.find('.answer_explanation').text());
                $('#e_video_link').val(_this.find('.video_link').text());
                $('#e_category').val(_this.find('.category').text()).change();
                $('#e_department').val(_this.find('.department').text()).change();
                $('#e_answer').val(_this.find('.answer').text()).change();
            });
        </script>

        {{-- delete --}}
        <script>
            $(document).on('click','.delete_question',function() {
                var _this = $(this).parents('tr');
                $('.e_id').val(_this.find('.e_id').text());
            });
        </script>
        {{-- delete model --}}
    @endsection

@endsection