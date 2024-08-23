<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinem@s - Formulario</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <!-- jquery -->
    <script src="../Utils/jquery-3.7.1.js"></script>
    <!-- validaciones -->
    <script src="../Utils/Validaciones.js"></script>
</head>
<body>
    <div class="pt-5 ps-5"> 
        <div class="card-header">
            <h1 class="h4">Consigna</h1>
        </div>
        <p>Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista de géneros tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras. Aplicar Bootstrap y validar lo siguiente:</p>
            <ul>
                <li>El año debe ser un campo que permita ingresar como máximo 4 caracteres y solo aceptar números.</li>
                <li>El campo duración debe permitir un máximo de 3 números.</li>
                <li>Todos los datos son obligatorios.</li>
                <li>Al hacer clic en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el formulario.</li>
                <li>El botón “Borrar” debe limpiar el formulario.</li>
            </ul>
    </div>
    <div class="container mt-5">
        <!-- título -->
        <div class="d-flex align-items-center mb-4">
            <h1 class="text-center">Cinem@s</h1>
        </div>
        <form id="formularioCinemas" name="formularioCinemas" method="post" action="Action/actionEj4.php" >
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input name="titulo" type="text" id="titulo" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="actores" class="form-label">Actores:</label>
                    <input name="actores" type="text" id="actores" class="form-control" required>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label for="director" class="form-label">Director:</label>
                    <input name="director" type="text" id="director" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="guion" class="form-label">Guion:</label>
                    <input name="guion" type="text" id="guion" class="form-control" required>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label for="produccion" class="form-label">Producción:</label>
                    <input name="produccion" type="text" id="produccion" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ano" class="form-label">Año:</label>
                    <input name="ano" type="text" id="ano" class="form-control" maxlength="4" required>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                    <input name="nacionalidad" type="text" id="nacionalidad" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="genero" class="form-label">Género:</label>
                    <select name="genero" id="genero" class="form-select" required>
                        <option value="">Seleccionar...</option>
                        <option value="Comedia">Comedia</option>
                        <option value="Drama">Drama</option>
                        <option value="Terror">Terror</option>
                        <option value="Románticas">Románticas</option>
                        <option value="Suspenso">Suspenso</option>
                        <option value="Otras">Otras</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label for="duracion" class="form-label">Duración:</label>
                    <input name="duracion" type="text" id="duracion" class="form-control" maxlength="3" required>
                    <small>(minutos)</small>
                </div>
                <div class="col-md-6 mb-3">
                    <fieldset class="form-group">
                        <legend class="col-form-label">Restricción de Edad:</legend>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="restriccion" id="todosPublicos" value="Todos los públicos" required>
                            <label class="form-check-label" for="todosPublicos">Todos los públicos</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="restriccion" id="mayores7" value="Mayores de 7 años" required>
                            <label class="form-check-label" for="mayores7">Mayores de 7 años</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="restriccion" id="mayores18" value="Mayores de 18 años" required>
                            <label class="form-check-label" for="mayores18">Mayores de 18 años</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="mb-4">
                <label for="sinopsis" class="form-label">Sinopsis:</label>
                <textarea name="sinopsis" id="sinopsis" class="form-control" rows="5" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-secondary">Borrar</button>
            </div>
        </form>
    </div>
    <div class="mt-4 p-5">
            <a href="../../Menu.php" class="btn btn-secondary">Volver al menú</a>
    </div>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Utils/Validaciones.js"></script>
</body>
</html>