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

<!-- Nav Bar -->
@section('admin_navbar')
    @include('app.admin.components.nav-index')
@endsection
       
@section('content')
    <style>
       .custom-card {
            width: 100%;
            heigt: 200%;
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

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-9">
                <!-- Primera fila: 4 tarjetas -->
                <div class="row g-4">
                    <!-- Card: 1 -->
                    <div class="col-6 col-md-3">
                        <div class="custom-card p-3 text-center d-flex flex-column align-items-center">
                            <!-- Cuadro de ícono con fondo -->
                            <div class="icon-box mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-trophy fa-2x text-white"></i>
                            </div>

                            <!-- Título -->
                            <h5 class="fw-bold mb-2">Ligas/Torneos</h5>

                            <!-- Descripción -->
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <!-- Botón -->
                            <button class="btn btn-primary btn-sm">Acceder</button>
                        </div>
                    </div>

                    <!-- Card: 2 -->
                    <div class="col-6 col-md-3">
                        <div class="custom-card p-3 text-center d-flex flex-column align-items-center">
                            <!-- Cuadro de ícono con fondo -->
                            <div class="icon-box mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-shirt fa-2x text-white"></i>
                            </div>

                            <!-- Título -->
                            <h5 class="fw-bold mb-2">Equipos</h5>

                            <!-- Descripción -->
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <!-- Botón -->
                            <button class="btn btn-primary btn-sm">Acceder</button>
                        </div>
                    </div>

                    <!-- Card: 3 -->
                    <div class="col-6 col-md-3">
                        <div class="custom-card p-3 text-center d-flex flex-column align-items-center">
                            <!-- Cuadro de ícono con fondo -->
                            <div class="icon-box mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-futbol fa-2x text-white"></i>
                            </div>

                            <!-- Título -->
                            <h5 class="fw-bold mb-2">Partidos/Decretos</h5>

                            <!-- Descripción -->
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <!-- Botón -->
                            <button class="btn btn-primary btn-sm">Acceder</button>
                        </div>
                    </div>

                    <!-- Card: 4 -->
                    <div class="col-6 col-md-3">
                        <div class="custom-card p-3 text-center d-flex flex-column align-items-center">
                            <!-- Cuadro de ícono con fondo -->
                            <div class="icon-box mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-clipboard fa-2x text-white"></i>
                            </div>

                            <!-- Título -->
                            <h5 class="fw-bold mb-2">Resultados</h5>

                            <!-- Descripción -->
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <!-- Botón -->
                            <button class="btn btn-primary btn-sm">Acceder</button>
                        </div>
                    </div>
                </div>

                <!-- Segunda fila: 2 tarjetas centradas -->
                <div class="row g-4 mt-1 justify-content-center">
                    <!-- Card: 1 -->
                    <div class="col-6 col-md-3">
                        <div class="custom-card p-3 text-center d-flex flex-column align-items-center">
                            <!-- Cuadro de ícono con fondo -->
                            <div class="icon-box mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-user-gear fa-2x text-white"></i>
                            </div>

                            <!-- Título -->
                            <h5 class="fw-bold mb-2">Usuario</h5>

                            <!-- Descripción -->
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <!-- Botón -->
                            <button class="btn btn-primary btn-sm">Acceder</button>
                        </div>
                    </div>

                    <!-- Card: 2 -->
                    <div class="col-6 col-md-3">
                        <div class="custom-card p-3 text-center d-flex flex-column align-items-center">
                            <!-- Cuadro de ícono con fondo -->
                            <div class="icon-box mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-gear fa-2x text-white"></i>
                            </div>

                            <!-- Título -->
                            <h5 class="fw-bold mb-2">Configuración</h5>

                            <!-- Descripción -->
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <!-- Botón -->
                            <button class="btn btn-primary btn-sm">Acceder</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection