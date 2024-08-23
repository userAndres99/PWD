
//------------------------------EJERCIO 1 ------------------------------------------------------------------------------------------
// Espera a que el documento esté completamente cargado antes de ejecutar cualquier código.
$(document).ready(function() {

    // Se añade un event listener que se activa cuando el formulario con id 'formEj1' se envía.
    // en la parte de $('#formEj1') utilizo jquery para seleccionar al formulario de mi ejercicio
    $('#formEj1').submit(function(event) {

        //inicio una variable en verdadero para ir verificando que sea valido
        var valido = true;

        // Validación del número (debe estar dentro del rango permitido)
        // $('#numero_form') selecciono el input numero del formulario con jquery
        // val() lo utilizo para obtener el valor dentro del campo
        // parseInt vuelve el numero entero 
        var numero = parseInt($('#numero_form').val());

        // Elimina cualquier clase de error previa antes de realizar la validación
        $('#numero_form').removeClass('input-error');

        //isNaN sirve para decir en este caso "si no es un numero entonces"
        if (isNaN(numero)) {
            alert('Por favor, ingrese un número válido.');

            // Añade borde rojo si no es un número válido
            $('#numero_form').css('border', '2px solid red');
            valido = false;

            //si es un numero entonces me fijo que este entre los requisitos del minimo y maximo que coloque
            //"si el numero es menor a mi minimo o mayor a mi maximo entonces"
        } else if (numero < -1000000 || numero > 1000000) {
            alert('El número debe estar entre -1,000,000 y 1,000,000.');

            // Añade borde rojo si no es un número válido
            $('#numero_form').css('border', '2px solid red'); 
            valido = false;
        }

        //si valido esta en falso entonces
        if (!valido) {
            // Prevenir el envío del formulario si hay errores
            event.preventDefault(); 
        }
    });
});



//------------------------------EJERCICIO 2 ------------------------------------------------------------------------------------------
$(document).ready(function() {

    // Cuando se envie el formulario del ejercicio 2
    $('#formEj2').submit(function(event) {

        // Variable para controlar si el formulario es válido.
        var valido = true; 

        // Array de los ids de los inputs de los días de la semana.
        var dias = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'];

        // Recorre todos los días para validar las horas ingresadas.
        for (var i = 0; i < dias.length; i++) {
            var dia = dias[i];

            // Obtiene el valor del input y lo convierte a número entero.
            var horas = parseInt($('#' + dia).val()); 

             // Restablece el estilo del borde antes de la validación
             $('#' + dia).css('border', '');

            // Verifica si el valor ingresado no es un número o está fuera de las 24 horas.
            if (isNaN(horas) || horas < 0 || horas > 24) {


                // Si hay un error un borde rojo.
                $('#' + dia).css('border', '2px solid red');

                // Si hay un error marca el formulario como inválido.
                valido = false; 

              
            }else {
                // Si el input es valido borde verde.
                $('#' + dia).css('border', '2px solid green');
            }
        }

        // Si el formulario no es válido entonces
        if (!valido) {
            alert('Por favor, ingrese una cantidad válida de horas para cada dia de la semana de 0 a 24 hrs');
            // Prevenir el envío del formulario si hay errores.
            event.preventDefault(); 
        }
    });
});


//------------------------------EJERCICIO 3 y 4 ya que no se modifica nada en el formulario ------------------------------------------------------------
$(document).ready(function() {

    // Cuando se envíe el formulario del ejercicio 3
    $('#formEj3y4').submit(function(event) {

        // Variable para controlar si el formulario es válido.
        var valido = true;

        // Array de los IDs de los inputs que vamos a validar.
        var campos = ['nombre', 'apellido', 'edad', 'direccion'];

        // Elimina mensajes de error previos
        $('.error-message').remove();

        // Recorre todos los campos para validar los datos ingresados.
        for (var i = 0; i < campos.length; i++) {
            var campo = campos[i];

            // Obtiene el valor del input y elimina espacios en blanco al inicio y al final.
            var valor = $('#' + campo).val().trim();

            // Restablece el estilo del borde antes de la validación
            $('#' + campo).css('border', '');

            // Verifica si el campo está vacío después de eliminar los espacios en blanco.
            if (valor === '') {
                // Agrega un mensaje de error junto al input
                $('#' + campo).after('<span class="error-message" style="color: red;">Por favor, complete el campo ' + campo + '.</span>');

                // Si hay un error, aplica un borde rojo.
                $('#' + campo).css('border', '2px solid red');

                // Marca el formulario como inválido.
                valido = false;

            } else {
                // Validación específica para los campos "nombre" y "apellido"
                if (campo === 'nombre' || campo === 'apellido') {
                    var letra = /^[a-zA-Z\s]+$/;
                    if (!letra.test(valor)) {
                        // Agrega un mensaje de error junto al input
                        $('#' + campo).after('<span class="error-message" style="color: red;">Por favor, ingrese solo letras para ' + campo + '.</span>');

                        // Si hay un error, aplica un borde rojo.
                        $('#' + campo).css('border', '2px solid red');

                        // Marca el formulario como inválido.
                        valido = false;
                    } else {
                        // Si el input es válido, aplica un borde verde.
                        $('#' + campo).css('border', '2px solid green');
                    }
                }

                // Validación específica para el campo "edad"
                if (campo === 'edad') {
                    var edad = parseInt(valor);
                    if (isNaN(edad) || edad < 0) {
                        // Agrega un mensaje de error junto al input
                        $('#' + campo).after('<span class="error-message" style="color: red;">Por favor, ingrese una edad válida.</span>');

                        // Si hay un error, aplica un borde rojo.
                        $('#' + campo).css('border', '2px solid red');

                        // Marca el formulario como inválido.
                        valido = false;
                    } else {
                        // Si el input es válido, aplica un borde verde.
                        $('#' + campo).css('border', '2px solid green');
                    }
                }

                // Si no es un campo específico y es válido, aplica borde verde.
                if (campo !== 'nombre' && campo !== 'apellido' && campo !== 'edad') {
                    $('#' + campo).css('border', '2px solid green');
                }
            }
        }

        // Si el formulario no es válido
        if (!valido) {
            // Prevenir el envío del formulario si hay errores.
            event.preventDefault();
        }
    });
});

// ------------------------------EJERCICIO 5 ------------------------------------------------------------------------------------------
$(document).ready(function() {

    // Cuando se envíe el formulario del ejercicio 5
    $('#formEj5').submit(function(event) {

        // Variable para controlar si el formulario es válido.
        var valido = true;

        // Array de los IDs de los inputs que vamos a validar.
        var campos = ['nombre', 'apellido', 'edad', 'direccion'];

        // Elimina mensajes de error previos
        $('.error-message').remove();

        // Recorre todos los campos para validar los datos ingresados.
        for (var i = 0; i < campos.length; i++) {
            var campo = campos[i];

            // Obtiene el valor del input y elimina espacios en blanco al inicio y al final.
            var valor = $('#' + campo).val().trim();

            // Restablece el estilo del borde antes de la validación
            $('#' + campo).css('border', '');

            // Verifica si el campo está vacío después de eliminar los espacios en blanco.
            if (valor === '') {
                // Agrega un mensaje de error junto al input
                $('#' + campo).after('<span class="error-message" style="color: red;">Por favor, complete el campo ' + campo + '.</span>');

                // Si hay un error, aplica un borde rojo.
                $('#' + campo).css('border', '2px solid red');

                // Marca el formulario como inválido.
                valido = false;

            } else {
                // Validación específica para los campos "nombre" y "apellido"
                if (campo === 'nombre' || campo === 'apellido') {
                    var letra = /^[a-zA-Z\s]+$/;
                    if (!letra.test(valor)) {
                        // Agrega un mensaje de error junto al input
                        $('#' + campo).after('<span class="error-message" style="color: red;">Por favor, ingrese solo letras para ' + campo + '.</span>');

                        // Si hay un error, aplica un borde rojo.
                        $('#' + campo).css('border', '2px solid red');

                        // Marca el formulario como inválido.
                        valido = false;
                    } else {
                        // Si el input es válido, aplica un borde verde.
                        $('#' + campo).css('border', '2px solid green');
                    }
                }

                // Validación específica para el campo "edad"
                if (campo === 'edad') {
                    var edad = parseInt(valor);
                    if (isNaN(edad) || edad < 0) {
                        // Agrega un mensaje de error junto al input
                        $('#' + campo).after('<span class="error-message" style="color: red;">Por favor, ingrese una edad válida.</span>');

                        // Si hay un error, aplica un borde rojo.
                        $('#' + campo).css('border', '2px solid red');

                        // Marca el formulario como inválido.
                        valido = false;
                    } else {
                        // Si el input es válido, aplica un borde verde.
                        $('#' + campo).css('border', '2px solid green');
                    }
                }

                // Si no es un campo específico y es válido, aplica borde verde.
                if (campo !== 'nombre' && campo !== 'apellido' && campo !== 'edad') {
                    $('#' + campo).css('border', '2px solid green');
                }
            }
        }

        // Validación específica para el campo "Nivel de Estudio"
        if (!$('input[name="nivelEstudio"]:checked').val()) {
            // Agrega el mensaje de error después del <label> correspondiente
            $('label:contains("Nivel de Estudio:")').after('<span class="error-message" style="color: red;"> Por favor, seleccione un nivel de estudio.</span>');
            valido = false;
        }

        // Validación específica para el campo "Sexo"
        if (!$('input[name="sexo"]:checked').val()) {
            // Agrega el mensaje de error después del <label> correspondiente
            $('label:contains("Sexo:")').after('<span class="error-message" style="color: red;"> Por favor, seleccione su sexo.</span>');
            valido = false;
        }

        // Si el formulario no es válido
        if (!valido) {
            // Prevenir el envío del formulario si hay errores.
            event.preventDefault();
        }
    });
});

//------------------------------ EJERCICIO 6 ------------------------------------------------------------------------------------------
$(document).ready(function() {
    // Cuando se envíe el formulario del ejercicio 6
    $('#formEj6').submit(function(event) {
        // Variable para controlar si el formulario es válido.
        var valido = true;

        // Elimina mensajes de error previos
        $('.error-message').remove();

        // Validación para campos de texto: nombre, apellido y edad
        var campos = ['nombre', 'apellido', 'edad'];
        for (var i = 0; i < campos.length; i++) {
            var campo = campos[i];
            var valor = $('#' + campo).val().trim();
            $('#' + campo).css('border', '');

            if (valor === '') {
                $('#' + campo).after('<span class="error-message" style="color: red;">Por favor, complete el campo ' + campo + '.</span>');
                $('#' + campo).css('border', '2px solid red');
                valido = false;
            } else {
                if (campo === 'nombre' || campo === 'apellido') {
                    var letra = /^[a-zA-Z\s]+$/;
                    if (!letra.test(valor)) {
                        $('#' + campo).after('<span class="error-message" style="color: red;">Por favor, ingrese solo letras para ' + campo + '.</span>');
                        $('#' + campo).css('border', '2px solid red');
                        valido = false;
                    } else {
                        $('#' + campo).css('border', '2px solid green');
                    }
                }

                if (campo === 'edad') {
                    var edad = parseInt(valor);
                    if (isNaN(edad) || edad < 0) {
                        $('#' + campo).after('<span class="error-message" style="color: red;">Por favor, ingrese una edad válida.</span>');
                        $('#' + campo).css('border', '2px solid red');
                        valido = false;
                    } else {
                        $('#' + campo).css('border', '2px solid green');
                    }
                }
            }
        }

        // Validación para campo "Sexo"
        if (!$('input[name="sexo"]:checked').val()) {
            $('label[for="sexo"]').after('<span class="error-message" style="color: red;"> Por favor, seleccione su sexo.</span>');
            valido = false;
        }

        // Validación para campo "Nivel de Estudio"
        if (!$('input[name="nivelEstudio"]:checked').val()) {
            $('label[for="nivelEstudio"]').after('<span class="error-message" style="color: red;"> Por favor, seleccione un nivel de estudio.</span>');
            valido = false;
        }

        // Validación para el campo "Deportes que practica"
        if ($('input[name="deportes[]"]:checked').length === 0) {
            $('label[for="deportes"]').after('<span class="error-message" style="color: red;"> Por favor, seleccione al menos un deporte.</span>');
            valido = false;
        }

        // Si el formulario no es válido, prevenir el envío
        if (!valido) {
            event.preventDefault();
        }
    });
});


//------------------------------ EJERCICIO 7 ------------------------------------------------------------------------------------------
$(document).ready(function() {
    // Cuando se envíe el formulario del ejercicio 7
    $('#formEj7').submit(function(event) {
        // Variable para controlar si el formulario es válido.
        var valido = true;

        // Elimina mensajes de error previos
        $('.error-message').remove();

        // Validación para el campo "Número 1"
        var numero1 = $('#numero1').val().trim();
        $('#numero1').css('border', '');

        if (!numero1 || isNaN(numero1)) {
            $('#numero1').after('<span class="error-message" style="color: red;">Por favor, ingrese un número válido para el campo Número 1.</span>');
            $('#numero1').css('border', '2px solid red');
            valido = false;
        } else {
            $('#numero1').css('border', '2px solid green');
        }

        // Validación para el campo "Número 2"
        var numero2 = $('#numero2').val().trim();
        $('#numero2').css('border', '');

        if (!numero2 || isNaN(numero2)) {
            $('#numero2').after('<span class="error-message" style="color: red;">Por favor, ingrese un número válido para el campo Número 2.</span>');
            $('#numero2').css('border', '2px solid red');
            valido = false;
        } else {
            $('#numero2').css('border', '2px solid green');
        }

        // Validación para el campo "Operación"
        if (!$('#operacion').val()) {
            $('#operacion').after('<span class="error-message" style="color: red;">Por favor, seleccione una operación.</span>');
            $('#operacion').css('border', '2px solid red');
            valido = false;
        } else {
            $('#operacion').css('border', '2px solid green');
        }

        // Si el formulario no es válido, prevenir el envío
        if (!valido) {
            event.preventDefault();
        }
    });
});

// ------------------------------ EJERCICIO 8 -------------------------------------------------------------------------------
$(document).ready(function() {
    // Cuando se envíe el formulario del ejercicio 8
    $('#formEj8').submit(function(event) {
        // Variable para controlar si el formulario es válido.
        var valido = true;

        // Elimina mensajes de error previos
        $('.error-message').remove();

        // Validación para el campo "Edad"
        var edad = $('#edad').val().trim();
        $('#edad').css('border', '');

        if (!edad || isNaN(edad) || edad <= 0) {
            $('#edad').after('<span class="error-message" style="color: red;">Por favor, ingrese una edad válida.</span>');
            $('#edad').css('border', '2px solid red');
            valido = false;
        } else {
            $('#edad').css('border', '2px solid green');
        }

        // Validación para el campo "¿Eres estudiante?"
        var estudianteSeleccionado = $('input[name="estudiante"]:checked').val();
        if (!estudianteSeleccionado) {
            $('label[for="estudiante"]').after('<span class="error-message" style="color: red;"> Por favor, seleccione una opcion.</span>');
            valido = false;
        }

        // Si el formulario no es válido, prevenir el envío
        if (!valido) {
            event.preventDefault();
        }
    });
});