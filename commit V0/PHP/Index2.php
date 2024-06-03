<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Registro de Usuarios</h2>
    
    <h3>Registrar Usuario</h3>
    <form method="post" action="registrar.php">
        <div class="input-wrapper">
            <input type="text" name="id_usuario" placeholder="Cédula" required>
        </div>
        <div class="input-wrapper">
            <input type="text" name="usuario" placeholder="Nombre" required>
            <img class="input-icon" src="images/name.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="perfil" placeholder="Perfil" required>
        </div>
        <div class="input-wrapper">
            <input type="text" name="contraseña" placeholder="Contraseña" required>
            <img class="input-icon" src="images/password.svg" alt="">
        </div>
        <input class="btn" type="submit" name="register" value="Enviar">
    </form>
    
    <h3>Lista de Usuarios</h3>
    <?php include 'read.php'; ?>

</body>
</html>