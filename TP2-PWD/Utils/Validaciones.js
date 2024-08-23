
//------------------ejercicio 3 --------------------------------------------------
$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        // Variable para controlar si el formulario es válido
        var valido = true;

        // Elimina mensajes de error previos
        //jQuery se utiliza para eliminar todos los elementos hijos de un elemento seleccionado en el DOM
        $('#errorMessages').empty();

        // Obtén los valores de los campos
        var usuario = $('#usuario').val().trim();
        var clave = $('#clave').val().trim();

        // Restablece los estilos de borde antes de la validación
        $('#usuario').css('border', '');
        $('#clave').css('border', '');

        // Variables para almacenar los mensajes de error
        var errores = '';

        // Validar campo usuario
        if (usuario === '') {
            errores += '<span class="error-message" style="color: red;">Por favor, complete el campo usuario.</span><br>';
            $('#usuario').css('border', '2px solid red');
            valido = false;
        } else {
            $('#usuario').css('border', '2px solid green');
        }

        // Validar campo clave
        if (clave === '') {
            errores += '<span class="error-message" style="color: red;">Por favor, complete el campo contraseña.</span><br>';
            $('#clave').css('border', '2px solid red');
            valido = false;
        } else {
            // Verificar que la contraseña tenga al menos 8 caracteres
            if (clave.length < 8) {
                errores += '<span class="error-message" style="color: red;">La contraseña debe tener al menos 8 caracteres.</span><br>';
                $('#clave').css('border', '2px solid red');
                valido = false;
            } 
            // Verificar que la contraseña no sea igual al usuario
            else if (clave === usuario) {
                errores += '<span class="error-message" style="color: red;">La contraseña no puede ser igual al nombre de usuario.</span><br>';
                $('#clave').css('border', '2px solid red');
                valido = false;
            } 
            // Verificar que la contraseña contenga letras y números
            else if (!/(?=.*[a-zA-Z])(?=.*\d)/.test(clave)) {
                errores += '<span class="error-message" style="color: red;">La contraseña debe contener letras y números.</span><br>';
                $('#clave').css('border', '2px solid red');
                valido = false;
            } else {
                $('#clave').css('border', '2px solid green');
            }
        }

        // Insertar los mensajes de error en el contenedor
        $('#errorMessages').html(errores);

        // Si el formulario no es válido, prevenir el envío
        if (!valido) {
            event.preventDefault();
        }
    });
});

//-------------------- ejercicio 4 --------------------
$(document).ready(function() {
    $('#formularioCinemas').submit(function(event) {
        // Variable para controlar si el formulario es válido
        var valido = true;

        // Elimina mensajes de error previos
        $('.error-message').remove();

        // Obtén los valores de los campos
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
        
        // Restablece los estilos de borde antes de la validación
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

        // Validar campo título
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

        // Validar campo producción
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

        // Validar campo duración
        if (duracion === '') {
            $('#duracion').after('<span class="error-message" style="color: red;">Por favor, complete el campo duración.</span>');
            $('#duracion').css('border', '2px solid red');
            valido = false;
        } else if (!/^\d{1,3}$/.test(duracion)) {
            $('#duracion').after('<span class="error-message" style="color: red;">La duración debe ser un número de hasta 3 dígitos.</span>');
            $('#duracion').css('border', '2px solid red');
            valido = false;
        }

        // Validar campo género
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