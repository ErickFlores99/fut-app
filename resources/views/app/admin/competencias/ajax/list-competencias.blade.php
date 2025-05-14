<div class="row justify-content-center">
    <div class="col-md-11 col-lg-10">
        <!-- Filas -->
        <div class="row g-4">
            @if($competencias->isNotEmpty())
                <!-- Card -->
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
            @else
                 <div class="col-12 col-md-12">
                    <div class="p-3 text-center d-flex flex-column align-items-center">
                        <!-- Título -->
                        <h5 class="fw-bold mb-2">Sin Competencias registradas, por favor agrega una</h5>
                    </div>
            @endif
        </div>
    </div>
</div>