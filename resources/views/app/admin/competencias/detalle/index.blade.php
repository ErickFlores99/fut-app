@extends('app.admin.layouts.app')

{{-- TODO: AGREGAR TITULO DE LA PESTAÑA --}}
@section('title','Detalle')

{{-- TODO: AGREGAR TITULO DEL HOME --}}
@section('home','Fut-Admin')

{{-- TODO: NAVBAR --}}
@section('admin_navbar')
    @include('app.admin.components.navbar')
@endsection

@section('script')
    {{-- TODO: Archivos para los scripts --}}

    <!-- CUSTOM JS -->
    {{--
        <script src="{{ asset('admin/Competencias/index.js') }}?version=1.1" type="text/javascript"></script>
    --}}
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
                    <p>
                        {{$competencia->nombre}} / {{$competencia->tipoCompetencia->nombre}} - {{$competencia->diaJuego->nombre}} /  {{$competencia->categoria->nombre}} - {{$competencia->rama->nombre}}
                    </p>
                </div>

                <!-- Columna de botónes -->
                <div class="col-12 col-md-4 text-center text-md-end">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-12 col-sm-11 mx-auto">

    </div>

@endsection