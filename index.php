<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
    <section class="login-container">
    <h1 class="lov">Registro</h1>

       <form method="post" action="registrados.php">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="cedula">Cédula</label>
            <input type="text" id="cedula" name="cedula" required>

            <label for="celular">Celular</label>
            <input type="text" id="celular" name="celular" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Ingresar" class="boton">
        </form>
    </section>

</body>
</html>