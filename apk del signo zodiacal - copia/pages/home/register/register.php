<?php
include "/Users/eniga/OneDrive/Documentos/Programacion/apk del signo zodiacal/db/conexion.php";

// Inicializar el array de errores
$errores = [];

// Validar y limpiar los datos recibidos
$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
$edad = isset($_POST['edad']) ? trim($_POST['edad']) : '';
$correo = isset($_POST['correo']) ? trim($_POST['correo']) : '';
$contrasena = isset($_POST['password']) ? $_POST['password'] : '';
$confirmContrasena = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

// Validar que los campos no estén vacíos
if (empty($nombre)) {
    $errores[] = "El campo 'Nombre' no puede estar vacío.";
}
if (empty($apellido)) {
    $errores[] = "El campo 'Apellido' no puede estar vacío.";
}
if (empty($edad)) {
    $errores[] = "El campo 'Edad' no puede estar vacío.";
}
if (empty($correo)) {
    $errores[] = "El campo 'Correo' no puede estar vacío.";
} elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El formato del correo electrónico es inválido.";
}

// Verificar que las contraseñas coincidan
if ($contrasena !== $confirmContrasena) {
    $errores[] = "Las contraseñas no coinciden.";
}

// Si hay errores, mostrar cada uno de ellos y detener la ejecución
if (!empty($errores)) {
    foreach ($errores as $error) {
        echo "<div class='alert alert-danger'>$error</div>";
    }
    exit(); // Detener el script si hay errores
}

// Encriptar la contraseña
$passwordHash = password_hash($contrasena, PASSWORD_DEFAULT);

// Preparar y ejecutar la consulta de inserción
$sql = "INSERT INTO usuario (nombre, apellido, edad, email, password) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $nombre, $apellido, $edad, $correo, $passwordHash);

// Ejecutar la consulta y verificar si fue exitosa
if ($stmt->execute()) {
    header("Location: /pages/home/consulta/validar.php");
} else {
    header("Location: error.php?error=" . urlencode($stmt->error));
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
exit();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprobante</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>

</body>

</html>