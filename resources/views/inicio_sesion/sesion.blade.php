<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios - Venta de Palanquetas</title>
    <link rel="stylesheet" href="..\resources\css\styleinicio.css">
</head>
<body>
    <form action="/submit_form" method="post">
        <h2>Registro de Usuario</h2>
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" required>

        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
