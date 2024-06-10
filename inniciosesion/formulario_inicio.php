<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>

    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conexión a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "abridores_pagina");

        // Verificar conexión
        if ($conexion === false) {
            die("ERROR: No se pudo conectar. " . mysqli_connect_error());
        }

        // Obtener el correo electrónico y la contraseña del formulario
        $email = $_POST["email"];
        $contraseña = $_POST["password"];

        // Consulta SQL para verificar las credenciales del usuario
        $consulta = "SELECT * FROM persona WHERE email = '$email' AND passw = '$contraseña'";

        // Ejecutar la consulta
        $resultado = mysqli_query($conexion, $consulta);

        // Contar el número de filas devueltas por la consulta
        $filas = mysqli_num_rows($resultado);

        // Si se encuentra una fila que coincide, el inicio de sesión se considera exitoso
        if ($filas == 1) {
            echo "Inicio de sesión exitoso. Bienvenido, $email.";
            // Aquí puedes redirigir al usuario a la página principal de la aplicación o realizar otras acciones
        } else {
            echo "Correo electrónico o contraseña incorrectos.";
        }

        // Liberar el resultado y cerrar la conexión
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }

    header("Location: ../home/home.php");
    ?>
</body>
</html>
