<?php



include 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $cedula = $_POST['cedula'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO registrados (nombre, apellido, usuario, cedula, celular, email, password) VALUES(?,?,?,?,?,?,?)";

    $stmt = $mysqli ->prepare($sql);
    $stmt-> bind_param("sssssss", $nombre, $apellido, $usuario, $cedula, $celular, $email, $password);
    $stmt->execute();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1>¡Felicidades!</h1>
        <p>Maravilloso, tu email: <strong><?=htmlspecialchars($email) ?></strong>se ha registrado con exito.</p>
        <button class="boton"><a href="index.php"> Volver al Formulario</a></button>
    </div>
    
</body>
</html>