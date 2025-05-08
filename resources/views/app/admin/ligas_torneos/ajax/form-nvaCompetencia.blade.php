<div class="row align-items-center">
       <div class=" bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0"><i class="bi bi-people-fill"></i> Registrar Nueva Competencia</h4>
            <button class="btn btn-danger" id="btn_ocultarform_nvaCompetencia" style="" onclick="ocultarForm_nvaCompetencia();">
                <i class="fa-regular fa-rectangle-xmark"></i>
            </button>
        </div>

        <div class="card-body">
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
                    
                            <div class="form-check">
                                <input 
                                    class="form-check-input competencia-checkbox" 
                                    type="checkbox" 
                                    name="idCompetencia"
                                    value="" 
                                    id="checkCompetencia_"
                                >
                                <label class="form-check-label" for="checkCompetencia_">
                                    $competencia->nombre 
                                </label>
                            </div>
                    
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
                        
                            <div class="form-check">
                                <input 
                                    class="form-check-input diaJuego-checkbox" 
                                    type="checkbox" 
                                    name="idDiaJuego"
                                    value="" 
                                    id="checkdiaJuego_"
                                >
                                <label class="form-check-label" for="checkdiaJuego_">
                                    $diaJuego->nombre
                                </label>
                            </div>
                    
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label"><strong>Categoria:</strong></label>
                    <div class="col-sm-9">
                        
                            <div class="form-check">
                                <input 
                                    class="form-check-input categoria-checkbox" 
                                    type="checkbox" 
                                    name="idCategoria"
                                    value="$categoria->id" 
                                    id="checkcategoria_$categoria->id"
                                >
                                <label class="form-check-label" for="checkcategoria_$categoria->id">
                                    $categoria->nombre
                                </label>
                            </div>
                    
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label"><strong>Rama:</strong></label>
                    <div class="col-sm-9">
                        
                            <div class="form-check">
                                <input 
                                    class="form-check-input rama-checkbox" 
                                    type="checkbox" 
                                    name="idRama"
                                    value="$rama->id" 
                                    id="checkrama_$rama->id"
                                >
                                <label class="form-check-label" for="checkrama_$rama->id">
                                    $rama->nombre
                                </label>
                            </div>
                    
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label"><strong>Fecha Inicio</strong></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="fechasIncio" id="fechasIncio" placeholder="Rango de fechas para el inicio y final...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label"><strong>Comentarios</strong></label>
                    <div class="col-sm-9">
                        <textarea name="" class="col-12 form-control" id="comentarios"></textarea>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label"><strong>Equipos: </strong></label>
                    <div class="col-sm-9">
                        <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                </div>

                
                <button type="button" class="btn btn-primary" onclick="nvaCompetencia();">Guardar</button>
            </form>
        </div>

</div>
