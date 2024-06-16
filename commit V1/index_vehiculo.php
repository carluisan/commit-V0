<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Vehículos</title>
</head>
<body>
    <h1>CRUD Vehículos</h1>
    <form action="" method="get">
        <label for="operacion">Seleccione una operación:</label>
        <select name="operacion" id="operacion">
            <option value="crear">Crear Nuevo Vehículo</option>
            <option value="leer">Ver Vehículos Registrados</option>
            <option value="actualizar">Actualizar Vehículo</option>
            <option value="eliminar">Eliminar Vehículo</option>
        </select>
        <input type="submit" value="Seleccionar">
    </form>
    <?php
    // Verificar si se ha seleccionado una operación
    if(isset($_GET['operacion'])) {
        $operacion = $_GET['operacion'];
        // Redirigir a la página correspondiente según la operación seleccionada
        switch($operacion) {
            case 'crear':
                header('Location: formulario_vehiculo.html');
                break;
            case 'leer':
                header('Location: leer_vehiculos.php');
                break;
            case 'actualizar':
                header('Location: actualizar_vehiculo.html');
                break;
            case 'eliminar':
                header('Location: eliminar_vehiculo.html');
                break;
            default:
                echo "Operación no válida";
        }
    }
    ?>
</body>

</html>