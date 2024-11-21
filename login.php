<?php
// Datos de ejemplo para autenticación (usuario: admin, contraseña: 12345)
$valid_username = "admin";
$valid_password = "12345";

// Obtener los datos enviados por el formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar si las credenciales son correctas
if ($username === $valid_username && $password === $valid_password) {
    // Credenciales correctas, redirigir a una página de bienvenida (o dashboard)
    header("Location: Tienda\Index.html");
    exit();
} else {
    // Credenciales incorrectas, redirigir a login.html con el parámetro de error
    $error = urlencode("Usuario o contraseña incorrectos");
    header("Location: Inicio.html?error=" . $error);
    exit();
}
?>