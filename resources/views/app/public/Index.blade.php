@extends('app.public.layouts.app')

{{-- TODO: AGREGAR TITULO DEL HOME --}}
@section('title','Fut-App')

{{-- TODO: AGREGAR TITULO DEL HOME --}}
@section('home','Fut-App')

{{-- TODO: AGREGAR TITULO DEL INDEX --}}
@section('header-name','INDEX PUBLICO')

@section('css')
    {{-- TODO: Archivos para el estilo --}}
@endsection

@section('script')
    {{-- TODO: Archivos para los scripts --}}
    <script>
        // Alerta SweetAlert2
        Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            });
    </script>
@endsection

@section('content')
    <div class="col-sm-12">
        Contenido de la Pagina
        <div class="row p-0">
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>
            <button type="button" class="btn btn-link">Link</button>
        </div>

        <div>
            <!-- Tooltip arriba (por defecto) -->
            <button 
                data-bs-toggle="tooltip" 
                title="Arriba (default)" 
                data-bs-placement="top">
                Tooltip arriba
            </button>

            <!-- Tooltip abajo -->
            <button 
                data-bs-toggle="tooltip" 
                title="Tooltip abajo" 
                data-bs-placement="bottom">
                Tooltip abajo
            </button>

            <!-- Tooltip a la izquierda -->
            <button 
                data-bs-toggle="tooltip" 
                title="Tooltip izquierda" 
                data-bs-placement="left">
                Tooltip izquierda
            </button>

            <!-- Tooltip a la derecha -->
            <button 
                data-bs-toggle="tooltip" 
                title="Tooltip derecha" 
                data-bs-placement="right">
                Tooltip derecha
            </button>
        </div>
    </div>
@endsection
