$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

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

const nvaCompetencia = () => {
    // Obtenemos el checkbox marcado
    let nombre = $('#nombre').val();
    if (!nombre) {
        // Alerta
        Swal.fire({
            title: "Error!",
            text: "Por favor, Ingrese un nombre a la competencia!",
            icon: "error"
        });
        return;
    }

    let nombre_nvoTipoCompetencia = null;
    let idTipoCompetencia = $('.tipoCompetencia-checkbox:checked').val();
    if (!idTipoCompetencia) {
        // Alerta
        Swal.fire({
            title: "Error!",
            text: "Por favor, selecciona una competencia!",
            icon: "error"
        });
        return;
    }

    if(idTipoCompetencia == '0') {
        nombre_nvoTipoCompetencia = $('#nombre_nvoTipoCompetencia').val();
        
        if (!nombre_nvoTipoCompetencia.trim()) {
            Swal.fire({
                title: "Error!",
                text: "Por favor, escribe el nombre de la nueva competencia!",
                icon: "error"
            });
            return;
        }
    }

    let idDiaJuego = $('.diaJuego-checkbox:checked').val();
    if (!idDiaJuego) {
        Swal.fire({
            title: "Error!",
            text: "Por favor, selecciona un dia de juego!",
            icon: "error"
        });
        return;
    }

    let idCategoria = $('.categoria-checkbox:checked').val();
    if (!idCategoria) {
        Swal.fire({
            title: "Error!",
            text: "Por favor, selecciona una categoria!",
            icon: "error"
        });
        return;
    }

    let idRama = $('.rama-checkbox:checked').val();
    if (!idRama) {
        Swal.fire({
            title: "Error!",
            text: "Por favor, selecciona una rama!",
            icon: "error"
        });
        return;
    }

    let fechaInicio = $('#fechaInicio').val();

    let notas = $('#notas').val();

    let form = document.getElementById('nvaCompetencia_Form');

    // Verificar si el formulario se encontró correctamente
    if (!form) {
        console.error("Formulario no encontrado");
        return;
    }

    // Crear FormData con los datos del formulario
    let formData = new FormData(form);
    console.log(formData);
    
    $.ajax({
        url: './competencias/crear',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
            //console.log(data); // "Guardado correctamente"
            if(data.status){
                
                Swal.fire({
                    title: data.message,
                    text: "\n",
                    icon: "success"
                });

                ocultarForm_nvaCompetencia();
                mostrarEventos();
            } else{
                Swal.fire({
                    title: data.message,
                    text: "\n",
                    icon: "error"
                });
            }
        },
        error: function(xhr, status, error) {
            //console.error("Error al registrar el equipo:", error);
            let mensaje = "Ocurrió un error inesperado";

            if (xhr.responseJSON && xhr.responseJSON.message) {
                mensaje = xhr.responseJSON.message;
            }

            Swal.fire({
                title: "Error",
                text: mensaje,
                icon: "error"
            });
        }
    });
}

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