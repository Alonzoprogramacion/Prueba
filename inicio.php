<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="stile.css">
</head>
<body>
        
    <div class="container">
        
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
