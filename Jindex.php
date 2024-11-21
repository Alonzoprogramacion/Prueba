<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión o Crear Cuenta</title>
    <link rel="stylesheet" href="Jstyles.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión o Crear Cuenta</h1>
        
        <div class="form-box">
            <h2>Iniciar Sesión</h2>
            <form action="Jprocesar.php" method="POST">
                <label for="login_usuario">Usuario</label>
                <input type="text" id="login_usuario" name="login_usuario" required>
                
                <label for="login_contrasena">Contraseña</label>
                <input type="password" id="login_contrasena" name="login_contrasena" required>
                
                <button type="submit" name="iniciar_sesion">Iniciar Sesión</button>
            </form>
        </div>
        
        
        <div class="form-box">
            <h2>Crear Cuenta</h2>
            <form action="Jprocesar.php" method="POST">
                <label for="registro_usuario">Usuario</label>
                <input type="text" id="registro_usuario" name="registro_usuario" required>
                
                <label for="registro_email">Correo Electrónico</label>
                <input type="email" id="registro_email" name="registro_email" required>
                
                <label for="registro_contrasena">Contraseña</label>
                <input type="password" id="registro_contrasena" name="registro_contrasena" required>
                
                <button type="submit" name="crear_cuenta">Crear Cuenta</button>
            </form>
        </div>
    </div>
</body>
</html>
