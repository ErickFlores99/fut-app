@extends('app.public.layouts.app')

{{-- TODO: AGREGAR TITULO DEL INDEX --}}
@section('header-name','INDEX PUBLICO')

@section('css')
    {{-- TODO: Archivos para el estilo --}}
@endsection

@section('script')
    {{-- TODO: Archivos para los scripts --}}
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

            <i class="bi bi-alarm" style="font-size: 2rem; color: cornflowerblue;"></i>

            <i class="fa-solid fa-futbol"></i>
        </div>
    </div>
@endsection
