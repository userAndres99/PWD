$(document).ready(function() {
    $('#formularioCinemas').submit(function(event) {
        // Variable para controlar si el formulario es valido
        var valido = true;

        // Elimina mensajes de error previos
        $('.error-message').remove();

        // los valores de los campos
        var ano = $('#ano').val().trim();
        var duracion = $('#duracion').val().trim();
        var titulo = $('#titulo').val().trim();
        var actores = $('#actores').val().trim();
        var director = $('#director').val().trim();
        var guion = $('#guion').val().trim();
        var produccion = $('#produccion').val().trim();
        var nacionalidad = $('#nacionalidad').val().trim();
        var genero = $('#genero').val().trim();
        var sinopsis = $('#sinopsis').val().trim();
        
        // Restablece los estilos de borde antes de la validacion
        $('#ano').css('border', '');
        $('#duracion').css('border', '');
        $('#titulo').css('border', '');
        $('#actores').css('border', '');
        $('#director').css('border', '');
        $('#guion').css('border', '');
        $('#produccion').css('border', '');
        $('#nacionalidad').css('border', '');
        $('#genero').css('border', '');
        $('#sinopsis').css('border', '');

        // Validar campo titulo
        if (titulo === '') {
            $('#titulo').after('<span class="error-message" style="color: red;">Por favor, complete el campo título.</span>');
            $('#titulo').css('border', '2px solid red');
            valido = false;
        }

        // Validar campo actores
        if (actores === '') {
            $('#actores').after('<span class="error-message" style="color: red;">Por favor, complete el campo actores.</span>');
            $('#actores').css('border', '2px solid red');
            valido = false;
        }

        // Validar campo director
        if (director === '') {
            $('#director').after('<span class="error-message" style="color: red;">Por favor, complete el campo director.</span>');
            $('#director').css('border', '2px solid red');
            valido = false;
        }

        // Validar campo guion
        if (guion === '') {
            $('#guion').after('<span class="error-message" style="color: red;">Por favor, complete el campo guion.</span>');
            $('#guion').css('border', '2px solid red');
            valido = false;
        }

        // Validar campo produccion
        if (produccion === '') {
            $('#produccion').after('<span class="error-message" style="color: red;">Por favor, complete el campo producción.</span>');
            $('#produccion').css('border', '2px solid red');
            valido = false;
        }

        // Validar campo nacionalidad
        if (nacionalidad === '') {
            $('#nacionalidad').after('<span class="error-message" style="color: red;">Por favor, complete el campo nacionalidad.</span>');
            $('#nacionalidad').css('border', '2px solid red');
            valido = false;
        }

        // Validar campo año
        if (ano === '') {
            $('#ano').after('<span class="error-message" style="color: red;">Por favor, complete el campo año.</span>');
            $('#ano').css('border', '2px solid red');
            valido = false;
        } else if (!/^\d{4}$/.test(ano)) {
            $('#ano').after('<span class="error-message" style="color: red;">El año debe ser un número de 4 dígitos.</span>');
            $('#ano').css('border', '2px solid red');
            valido = false;
        }

        // Validar campo duracion
        if (duracion === '') {
            $('#duracion').after('<span class="error-message" style="color: red;">Por favor, complete el campo duración.</span>');
            $('#duracion').css('border', '2px solid red');
            valido = false;
        } else if (!/^\d{1,3}$/.test(duracion)) {
            $('#duracion').after('<span class="error-message" style="color: red;">La duración debe ser un número de hasta 3 dígitos.</span>');
            $('#duracion').css('border', '2px solid red');
            valido = false;
        }

        // Validar campo genero
        if (genero === '') {
            $('#genero').after('<span class="error-message" style="color: red;">Por favor, seleccione un género.</span>');
            $('#genero').css('border', '2px solid red');
            valido = false;
        }

        // Validar campo sinopsis
        if (sinopsis === '') {
            $('#sinopsis').after('<span class="error-message" style="color: red;">Por favor, complete el campo sinopsis.</span>');
            $('#sinopsis').css('border', '2px solid red');
            valido = false;
        }

        // Validar restricción de edad
        if (!$('input[name="restriccion"]:checked').val()) {
            $('legend').after('<span class="error-message" style="color: red;">Por favor, seleccione una restricción de edad.</span>');
            valido = false;
        }

        // Si el formulario no es válido, prevenir el envío
        if (!valido) {
            event.preventDefault();
        }
    });
});