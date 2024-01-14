<?php
// procesar_login.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    // Recibir datos del formulario de inicio de sesión
    $nombreUsuario = $_POST['usuario'];
    $claveUsuario = $_POST['clave'];

    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "developer", "12345", "pulgosopetshop");

    if (!$conexion) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }

    // Consulta de autenticación con consulta preparada
    $sql = "SELECT * FROM usuario WHERE nombreusr = ? AND claveusr = ?";
    $stmt = mysqli_prepare($conexion, $sql);

    // Verificar si la preparación fue exitosa
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $nombreUsuario, $claveUsuario);
        mysqli_stmt_execute($stmt);

        $resultado = mysqli_stmt_get_result($stmt);

        // Verificación de resultados
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            // Autenticación exitosa
            $usuario = mysqli_fetch_assoc($resultado);

            $_SESSION['usuario'] = $nombreUsuario;

            if ($usuario['rol'] === 'admin') {
                header("Location: panel_admin.php");
                exit();
            } elseif ($usuario['rol'] === 'user') {
                header("Location: panel_cliente.php");
                exit();
            }
        }
    }

    // Autenticación fallida
    header("Location: login.php");
    exit();

} else {
    // Si alguien intenta acceder directamente a procesar_login.php sin enviar un formulario,
    // se redirige a la página de inicio.
    session_destroy();
    header("Location: login.php?error=1");
    exit();
}
?>

