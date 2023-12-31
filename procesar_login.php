<?php
// procesar_login.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar usuario y contraseña (deberías implementar medidas de seguridad)
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    // Aquí debes realizar la validación y autenticación del usuario, por ejemplo, consultando una base de datos.

    // Ejemplo simple: si el usuario es "admin" y la contraseña es "admin123"
    if ($usuario === "admin" && $clave === "admn321") {
        // Redirigir al panel de administración
        header("Location: panel_admin.php");
        exit();
    } elseif ($usuario === "cliente" && $clave === "cliente123") {
        // Redirigir al panel de clientes
        header("Location: panel_cliente.php");
        exit();
    } else {
        // Si las credenciales no coinciden, podrías mostrar un mensaje de error o redirigir a una página de error.
        header("Location: error_login.php");
        exit();
    }
} else {
    // Si alguien intenta acceder directamente a procesar_login.php sin enviar un formulario, podrías redirigirlo a la página de inicio.
    header("Location: index.php");
    exit();
}
?>
