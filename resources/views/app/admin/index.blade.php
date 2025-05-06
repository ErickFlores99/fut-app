@extends('app.admin.layouts.app')

{{-- TODO: AGREGAR TITULO DEL HOME --}}
@section('title','Fut-Admin')

{{-- TODO: AGREGAR TITULO DEL HOME --}}
@section('home','Fut-Admin')

@section('css')
    {{-- TODO: Archivos para el estilo --}}
@endsection

@section('script')
    {{-- TODO: Archivos para los scripts --}}
@endsection

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .pricing-card {
        border-radius: 1rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background: white;
        text-align: center;
        padding-bottom: 2rem;
        position: relative;
    }

    .card-header {
        background-color: #2c3e50;
        color: white;
        padding: 1.5rem 1rem;
        font-size: 1.25rem;
        font-weight: bold;
    }

    .price-circle {
        width: 70px;
        height: 70px;
        background-color: orange;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        font-weight: bold;
        position: absolute;
        top: 60px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1;
    }

    .feature-list {
        margin-top: 4rem;
        padding: 0 1.5rem;
    }

    .feature-list li {
        margin: 0.5rem 0;
        list-style: none;
        color: #666;
    }

    .btn-signup {
        margin-top: 1.5rem;
        border-radius: 30px;
        padding: 0.5rem 2rem;
        font-weight: bold;
    }

    .highlight-orange { background-color: orange; color: white; }
    .highlight-blue { background-color: #3498db; color: white; }
    .highlight-green { background-color: #2ecc71; color: white; }
</style>

<div class="container py-5">
    <div class="row justify-content-center align-items-end g-4">
        <!-- Plan 1 (Small) -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="pricing-card">
                <div class="card-header">Ligas/Torneos</div>
                <div class="price-circle highlight-green">$5</div>
                <ul class="feature-list mt-5">
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                </ul>
                <button class="btn btn-success btn-signup">Sign Up</button>
            </div>
        </div>

        <!-- Plan 2 (Large) -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="pricing-card" style="transform: scale(1.1);">
                <div class="card-header">Partidos</div>
                <div class="price-circle highlight-orange">$19</div>
                <ul class="feature-list mt-5">
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                </ul>
                <button class="btn btn-warning text-white btn-signup">Sign Up</button>
            </div>
        </div>

        <!-- Plan 3 (Large) -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="pricing-card" style="transform: scale(1.1);">
                <div class="card-header">Resultados</div>
                <div class="price-circle highlight-blue">$49</div>
                <ul class="feature-list mt-5">
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                </ul>
                <button class="btn btn-primary btn-signup">Sign Up</button>
            </div>
        </div>

        <!-- Plan 4 (Small) -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="pricing-card">
                <div class="card-header">Equipos</div>
                <div class="price-circle highlight-green">$99</div>
                <ul class="feature-list mt-5">
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                </ul>
                <button class="btn btn-success btn-signup">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row justify-content-center align-items-end g-4">
        <!-- Plan 1 (Small) -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="pricing-card">
                <div class="card-header">Configuración</div>
                <div class="price-circle highlight-green">$5</div>
                <ul class="feature-list mt-5">
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                </ul>
                <button class="btn btn-success btn-signup">Sign Up</button>
            </div>
        </div>

        <!-- Plan 4 (Small) -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="pricing-card">
                <div class="card-header">Usuario</div>
                <div class="price-circle highlight-green">$99</div>
                <ul class="feature-list mt-5">
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                    <li>Lorem ipsum</li>
                </ul>
                <button class="btn btn-success btn-signup">Sign Up</button>
            </div>
        </div>
    </div>
</div>
@endsection