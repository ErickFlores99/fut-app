@extends('app.admin.layouts.app')

{{-- TODO: AGREGAR TITULO DE LA PESTAÑA --}}
@section('title','Detalle')

{{-- TODO: AGREGAR TITULO DEL HOME --}}
@section('home','Fut-Admin')

<!-- Nav Bar -->
@section('admin_navbar')
    @include('app.admin.components.navbar')
@endsection

@section('script')
    {{-- TODO: Archivos para los scripts --}}

    <!-- CUSTOM JS -->
    <script src="{{ asset('admin/Competencias/index.js') }}?version=1.1" type="text/javascript"></script>

    <!-- DataTable JS -->
    <script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>

    {{-- TODO: Archivos para el funcionamineto del selector de selector de fechas --}}
    <!-- Momment JS -->
    <script src="{{ asset('assets/libs/moment-2.30.1.min.js') }}"></script>
    <!-- DatePicker JS -->
    <script src="{{ asset('assets/libs/datepicker.es.js') }}"></script>
    <!-- DateRangePicker JS -->
    <script src="{{ asset('assets/libs/daterangepicker.js') }}"></script>

@endsection

@section('css')
    {{-- TODO: Archivos para el estilo --}}

    <!-- DataTables  -->
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">

    <!-- DataTables  -->
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">


    <style>
        .custom-card {
                width: 100%;
                aspect-ratio: 1 / 1;
                border-radius: 2rem;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
                display: flex;
                justify-content: center;
            }

            .icon-box {
                width: 60px;
                height: 60px;
                background-color: #007bff;
                border-radius: 12px;
            }
        </style>
@endsection

<!-- Header -->
@section('admin_header')
    <div class="col-12 col-sm-11 mx-auto">
        <div class="shadow-sm p-3 mb-3 bg-white rounded">
            <div class="row align-items-center">
                <!-- Columna del título -->
                <div class="col-12 col-md-8 text-center text-md-start mb-2 mb-md-0">
                    <a href="{{ route('competencias.index') }}" class="text-decoration-none text-dark">
                        <h3>
                            <strong>Competencias</strong>
                        </h3>
                    </a>
                </div>

                <!-- Columna del botón -->
                <div class="col-12 col-md-4 text-center text-md-end">
                    <button  id="btn_mostrarForm_nvaCompetencia" onclick="mostrarForm_nvaCompetencia();"
                        class="btn btn-primary btn-sm"
                        data-bs-toggle="tooltip" 
                        title="Agregar nuevo evento deportivo" 
                        data-bs-placement="top"
                    >
                        Nuevo
                        <i class="fa-solid fa-circle-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-12 col-sm-11 mx-auto">
        <div class="mb-5 d-none" id="section_formCompetencias">
            <!-- Aquí mostramos el formulario -->  
        </div>

        <div id="section_listCompetencias">
            <!-- Aquí mostramos las competencias ya creadas -->  
        </div>
    </div>

@endsection