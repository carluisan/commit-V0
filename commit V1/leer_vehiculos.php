<?php
include 'db.php';

// Procesar la eliminación si se recibe una solicitud para eliminar un vehículo
if (isset($_POST['eliminar'])) {
    $id_vehiculo_placa = $_POST['id_vehiculo_placa'];
    $sql = "DELETE FROM vehiculo WHERE id_vehiculo_placa='$id_vehiculo_placa'";
    if ($conn->query($sql) === TRUE) {
        echo "Vehículo eliminado exitosamente.<br>";
    } else {
        echo "Error al eliminar el vehículo: " . $conn->error . "<br>";
    }
}

// Procesar la actualización si se recibe una solicitud para actualizar un vehículo
if (isset($_POST['actualizar'])) {
    $id_vehiculo_placa = $_POST['id_vehiculo_placa'];
    $id_usuario = $_POST['id_usuario'];
    $vin = $_POST['vin'];
    $no_motor = $_POST['no_motor'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $fecha_matricula = $_POST['fecha_matricula'];
    $fecha_rev_RTM = $_POST['fecha_rev_RTM'];
    $soat = $_POST['soat'];

    $sql = "UPDATE vehiculo 
            SET id_usuario='$id_usuario', vin='$vin', no_motor='$no_motor', marca='$marca', modelo=$modelo, fecha_matricula='$fecha_matricula', fecha_rev_RTM='$fecha_rev_RTM', soat='$soat'
            WHERE id_vehiculo_placa='$id_vehiculo_placa'";

    if ($conn->query($sql) === TRUE) {
        echo "Vehículo actualizado exitosamente.<br>";
    } else {
        echo "Error al actualizar el vehículo: " . $conn->error . "<br>";
    }
}

// Mostrar todos los vehículos registrados
$sql = "SELECT * FROM vehiculo";
$result = $conn->query($sql);

echo "<h2>Lista de Vehículos Registrados</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID Vehículo (Placa)</th>
                <th>ID Usuario</th>
                <th>VIN</th>
                <th>Número de Motor</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Fecha Matrícula</th>
                <th>Fecha Rev. Técnico-Mecánica</th>
                <th>SOAT</th>
                <th>Acciones</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <form method='post' action=''>
                    <td><input type='text' name='id_vehiculo_placa' value='{$row['id_vehiculo_placa']}' readonly></td>
                    <td><input type='text' name='id_usuario' value='{$row['id_usuario']}' required></td>
                    <td><input type='text' name='vin' value='{$row['vin']}' required></td>
                    <td><input type='text' name='no_motor' value='{$row['no_motor']}' required></td>
                    <td><input type='text' name='marca' value='{$row['marca']}' required></td>
                    <td><input type='number' name='modelo' value='{$row['modelo']}' required></td>
                    <td><input type='date' name='fecha_matricula' value='{$row['fecha_matricula']}' required></td>
                    <td><input type='date' name='fecha_rev_RTM' value='{$row['fecha_rev_RTM']}' required></td>
                    <td><input type='text' name='soat' value='{$row['soat']}' required></td>
                    <td>
                        <input type='submit' name='actualizar' value='Actualizar'>
                        <input type='submit' name='eliminar' value='Eliminar'>
                    </td>
                </form>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron vehículos registrados.";
}
?>

<br>
<a href="index_vehiculo.php">Volver a la página principal</a>

<?php
$conn->close();
?>
