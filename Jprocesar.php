<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="Stile.css">
</head>
<body>

<?php
$host = "localhost"; // Cambia a la configuración de tu servidor
$db = "Inicio_db"; // Nombre de la base de datos
$user = "root"; // Usuario de la base de datos
$password = ""; // Contraseña de la base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar Registro
if (isset($_POST['crear_cuenta'])) {
    $nombre = $_POST['registro_nombre'];
    $email = $_POST['registro_email'];
    $contrasena = password_hash($_POST['registro_password'], PASSWORD_DEFAULT); // Cifrar la contraseña

    // Verificar si el correo o el nombre de usuario ya existen
    $sql_check = "SELECT * FROM usuarios WHERE correo_electronico='$email' OR nombre_usuario='$nombre'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        echo "<script>alert('El correo o el nombre de usuario ya están en uso.');</script>";
    } else {
        // Si no existe, proceder con la inserción
        $sql = "INSERT INTO usuarios (nombre_usuario, correo_electronico, contrasena) VALUES ('$nombre', '$email', '$contrasena')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Cuenta creada exitosamente.');</script>";
        } else {
            echo "<script>alert('Error al crear la cuenta.');</script>";
        }
    }
}

// Procesar Inicio de Sesión
if (isset($_POST['iniciar_sesion'])) {
    $email = $_POST['login_email'];
    $contrasena = $_POST['login_password'];

    // Buscar al usuario en la base de datos
    $sql = "SELECT * FROM usuarios WHERE correo_electronico='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña ingresada con la contraseña cifrada en la base de datos
        if (password_verify($contrasena, $row['contrasena'])) {
            echo "<script>alert('Inicio de sesión exitoso.'); window.location.href = 'Paginadeosos.php';</script>";
        } else {
            echo "<script>alert('Contraseña incorrecta.');</script>";
        }
    } else {
        echo "<script>alert('No se encontró el usuario.');</script>";
    }
}

// Cerrar conexión
$conn->close();
?>
    <div class="container">
        <!-- Formulario de Iniciar Sesión -->
        <div class="container-form">
            <form class="sign-in" action="Jprocesar.php" method="POST">
                <h2>Iniciar Sesión</h2>
                <span>Use su correo y contraseña</span>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="login_email" placeholder="Email" required>
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="login_password" placeholder="Password" required>
                </div>
                <button type="submit" name="iniciar_sesion" class="button">INICIAR SESIÓN</button>
            </form>
        </div>

        <!-- Formulario de Registrarse -->
        <div class="container-form">
            <form class="sign-up" action="Jprocesar.php" method="POST">
                <h2>Registrarse </h2>
                <span>Use su correo electrónico para registrarse</span>
                <div class="container-input">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="registro_nombre" placeholder="Nombre" required>
                </div>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="registro_email" placeholder="Email" required>
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="registro_password" placeholder="Password" required>
                </div>
                <button type="submit" name="crear_cuenta" class="button">REGISTRARSE</button>
            </form>
        </div>

        <!-- Mensajes de Bienvenida -->
        <div class="container-welcome">
            <div class="welcome-sign-up welcome">
                <h3>¡Suyisa'SKitty!</h3>
                <button class="button" id="btn-sign-up">Registrarse</button>
            </div>
            <div class="welcome-sign-in welcome">
                <h3>¡Regístrate para realizar tus compras!!!</h3>
                <button class="button" id="btn-sign-in">Iniciar Sesión</button>
            </div>
        </div>
    </div>

    <script src="scriptsss.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    </html>