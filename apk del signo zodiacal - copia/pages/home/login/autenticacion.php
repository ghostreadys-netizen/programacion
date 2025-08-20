<?php
session_start();
include "/Users/eniga/OneDrive/Documentos/Programacion/apk del signo zodiacal/db/conexion.php";

$errores = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Limpiar y obtener los datos del formulario
    $correo = trim($_POST['email_user']);
    $contrasena = trim($_POST['password']);
    
    // Validar formato de correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico no tiene un formato válido.";
    }

    if (empty($errores)) {
        // Preparar la consulta SQL solo con el correo electrónico
        $stmt = $conn->prepare("SELECT id, email, password FROM usuario WHERE email = ?");
        $stmt->bind_param('s', $correo);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        // Verificar si el usuario existe
        if (!$row) {
            $errores[] = "El usuario no existe.";
        } else {
            // Verificar la contraseña usando password_verify
            if (!password_verify($contrasena, $row['password'])) {
                $errores[] = "La contraseña es incorrecta.";
            } else {
                // Configurar la sesión y redirigir si las credenciales son correctas
                $_SESSION['id_usuario'] = $row['id'];
                header("Location: /pages/home/consulta/validar.php");
                exit;
            }
        }

        // Cerrar la declaración
        $stmt->close();
    }
}

// Mostrar errores en caso de que existan
if (!empty($errores)) {
    foreach ($errores as $error) {
        echo "<div class='alert alert-danger'>$error</div>";
    }
}
?>