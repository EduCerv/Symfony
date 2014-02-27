$(document).ready(main);

function main() {
    $('#form_datos').validate({
        rules: {
            nombre: {
                required: true
            },
            apellido: {
                required: true
            },
            escuela: {
                required: true
            }
        },
        messages: {
            nombre: {
                required: 'Campo requerido'
            },
            apellido: {
                required: 'Campo requerido'
            },
            escuela: {
                required: 'Campo requerido'
            }
        },
        submitHandler: function(form) {
            $("#loader").show('5000');
            $(form).ajaxSubmit();
            $("#datos_formulario").show();
            $("#loader").hide();
        }

    });
}
