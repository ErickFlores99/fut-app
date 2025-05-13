<div class="row">
    <div class="col-11 mx-auto">
        <div class="card shadow rounded-4 mt-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center rounded-top-4">
                <h4 class="mb-0">
                    <i class="bi bi-people-fill"></i> Registrar Nueva Competencia
                </h4>
                <button type="button" class="btn btn-danger" id="btn_ocultarform_nvaCompetencia" onclick="ocultarForm_nvaCompetencia();">
                    <i class="fa-regular fa-rectangle-xmark"></i>
                </button>
            </div>
            <div class="card-body">
                {{-- route('nvoEquipo') --}}
                <form action="#" id="nvaCompetencia_Form" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label"><strong>Nombre:</strong></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label"><strong>Competencia:</strong></label>
                        <div class="col-sm-9">
                            @foreach($tiposCompetencias as $competencia)
                                <div class="form-check">
                                    <input 
                                        class="form-check-input competencia-checkbox" 
                                        type="checkbox" 
                                        name="idCompetencia"
                                        value="{{ $competencia->id }}" 
                                        id="checkCompetencia_{{ $competencia->id }}"
                                    >
                                    <label class="form-check-label" for="checkCompetencia_{{ $competencia->id }}">
                                        {{ $competencia->nombre }}
                                    </label>
                                </div>
                            @endforeach
                            <div class="form-check">
                                <input 
                                    class="form-check-input competencia-checkbox" 
                                    type="checkbox"
                                    name="idCompetencia" 
                                    value="0" 
                                    id="checkCompetencia_0"
                                >
                                <label class="form-check-label" for="checkCompetencia_0">
                                    Otra...
                                </label>                   
                            </div>
                            <div id="nvaCompetencia" style="display: none;">
                                <input type="text" class="form-control" id="nombre_nvaCompetencia" placeholder="Nueva Competencia...">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label"><strong>Dia Juego:</strong></label>
                        <div class="col-sm-9">
                            @foreach($diasJuego as $diaJuego)
                                <div class="form-check">
                                    <input 
                                        class="form-check-input diaJuego-checkbox" 
                                        type="checkbox" 
                                        name="idDiaJuego"
                                        value="{{ $diaJuego->id }}" 
                                        id="checkdiaJuego_{{ $diaJuego->id }}"
                                    >
                                    <label class="form-check-label" for="checkdiaJuego_{{ $diaJuego->id }}">
                                        {{ $diaJuego->nombre }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label"><strong>Categoria:</strong></label>
                        <div class="col-sm-9">
                            @foreach($categorias as $categoria)
                                <div class="form-check">
                                    <input 
                                        class="form-check-input categoria-checkbox" 
                                        type="checkbox" 
                                        name="idCategoria"
                                        value="{{ $categoria->id }}" 
                                        id="checkcategoria_{{ $categoria->id }}"
                                    >
                                    <label class="form-check-label" for="checkcategoria_{{ $categoria->id }}">
                                        {{ $categoria->nombre }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label"><strong>Rama:</strong></label>
                        <div class="col-sm-9">
                            @foreach($ramas as $rama)
                                <div class="form-check">
                                    <input 
                                        class="form-check-input rama-checkbox" 
                                        type="checkbox" 
                                        name="idRama"
                                        value="{{ $rama->id }}" 
                                        id="checkrama_{{ $rama->id }}"
                                    >
                                    <label class="form-check-label" for="checkrama_{{ $rama->id }}">
                                        {{ $rama->nombre }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label"><strong>Fecha Inicio</strong></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="fechaInicio" id="fechaInicio" placeholder="Rango de fechas para el inicio y final...">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label"><strong>Comentarios</strong></label>
                        <div class="col-sm-9">
                            <textarea name="" class="col-12 form-control" id="comentarios"></textarea>
                        </div>
                    </div>
                
                    <div class="col-sm-2 text-center text-sm-start">
                        <button 
                            type="button" 
                            class="btn btn-primary w-100 w-sm-50" 
                            onclick="nvaCompetencia();"
                        >
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.competencia-checkbox').on('change', function () {
            // Deseleccionamos los demás
            $('.competencia-checkbox').not(this).prop('checked', false);

            // Obtenemos el valor del seleccionado
            const valorSeleccionado = $(this).val();

            // Verificamos si es 0 (la opción "Otra...")
            if (valorSeleccionado == 0 && $(this).is(':checked')) {
                $('#nvaCompetencia').show();
            } else {
                $('#nvaCompetencia').hide();
            }
        });

        $('.diaJuego-checkbox').on('change', function () {
            // Si se selecciona uno, desmarcamos los demás
            $('.diaJuego-checkbox').not(this).prop('checked', false);
        });

        $('.categoria-checkbox').on('change', function () {
            // Si se selecciona uno, desmarcamos los demás
            $('.categoria-checkbox').not(this).prop('checked', false);
        });

        $('.rama-checkbox').on('change', function () {
            // Si se selecciona uno, desmarcamos los demás
            $('.rama-checkbox').not(this).prop('checked', false);
        });

        $('#fechaInicio').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
    
            locale: labelsTraduccionES,
            "alwaysShowCalendars": true,
            ranges: rangesTraduccionEs,
        });

        $('#fechaInicio').on('cancel.daterangepicker', function(ev, picker) {
            $('#fechaInicio').val('');
        });
        
        $('#fechaInicio').val('');
    });
</script>