const mostrarForm_nvaCompetencia = () => {
    // realizamos una petion ajax
    $.ajax({
        url: './competencias/nueva/datos-basicos',
        type: 'GET',
        data: {},
        success: function(data) {
            // Mandamos los datos a nuestra funcion del controlador
            document.getElementById('btn_mostrarForm_nvaCompetencia').classList.add('d-none');
            document.getElementById('section_formCompetencias').classList.remove('d-none');

            $('#section_formCompetencias').html(data);
        },
        error: function(error) {
            console.error("Error al mostrar el formulario nueva competencia:", error);
            alert("Hubo un error al mostrar el formulario nueva competencia:");
        }
    });
}

const ocultarForm_nvaCompetencia = () => {
    document.getElementById('btn_mostrarForm_nvaCompetencia').classList.remove('d-none');
    document.getElementById('btn_ocultarform_nvaCompetencia').classList.add('d-none');
    document.getElementById('section_formCompetencias').classList.add('d-none');
};

const mostrarEventos = () => {
    // Obtenemos los equipos registrados
    $.ajax({
        url: './competencias/mostrar',
        data: {
        },
        success: function(data) {
            $('#section_listCompetencias').html(data);
        }
    });
};

/********************************* LLAMADO DE FUNCIONES ********************************/
mostrarEventos();