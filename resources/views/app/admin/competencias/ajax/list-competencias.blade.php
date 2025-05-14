<div class="row justify-content-center">
    <div class="col-md-11 col-lg-10">
        <!-- Filas -->
        <div class="row g-4">
            @if($competencias->isNotEmpty())
                @foreach($competencias as $competencia)
                    <!-- Card -->
                    <div class="col-6 col-md-3">
                        <div class="custom-card p-3 text-center d-flex flex-column align-items-center">
                            <!-- Cuadro de ícono con fondo -->
                            <div class="icon-box mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-trophy fa-2x text-white"></i>
                            </div>

                            <!-- Título -->
                            <h5 class="fw-bold mb-2">{{$competencia->nombre}}</h5>
                            
                            <!-- Subtitulo 1 -->
                            <p class="fw-bold mb-2">
                                <strong>
                                    {{$competencia->tipoCompetencia->nombre}} - {{$competencia->diaJuego->nombre}}
                                </strong>
                            </>
                            <!-- Subtitulo 2 -->
                            <p class="fw-bold mb-2">
                                <strong>
                                    {{$competencia->categoria->nombre}} | {{$competencia->rama->nombre}}
                                </strong>
                            </>

                            <!-- Descripción -->
                            <p class="text-muted small mb-3">{{$competencia->notas ?? ''}}</p>

                            <!-- Botón -->
                            <button class="btn btn-primary btn-sm">Acceder</button>
                        </div>
                    </div>
                @endforeach
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