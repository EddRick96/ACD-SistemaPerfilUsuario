<?php 
    // Llamada al archivo de conexion con la base de datos.
    include "config/dbConnection.php";
    // OPCIONAL mientras de realizan pruebas validacion de cedula
    // include "dni_validate.php";

    // 1. SANITIZACIÓN Y VALIDACIÓN DE ENTRADAS
    // htmlspecialchars previene XSS. trim elimina espacios en blanco innecesarios.
    $dni = htmlspecialchars(trim($_POST['dni']));
    $name = htmlspecialchars(trim($_POST['name']));
    // filter_var limpia el correo de caracteres no válidos.
    $mail  = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
    $password_wohash  = $_POST['password']; // Contraseña recibida del formulario

    // 2. HASHEO DE LA CONTRASEÑA (CRUCIAL)
    // Usamos PASSWORD_DEFAULT para la mejor protección actual.
    $password_hashed = password_hash($password_wohash, PASSWORD_DEFAULT);

    // Verificar si el correo ya existe.
    $verify = $connection->prepare("SELECT id FROM users WHERE mail = ?");
    $verify -> bind_param("s",$mail);
    $verify ->execute();
    $verify ->store_result();

    if ($verify ->num_rows > 0){
        // Escapar el mensaje de error por precaución
        echo "<p style='text-align:center; color: red;'>" . htmlspecialchars("El correo ya está registrado.") . "</p>";
    } else {
        // Inserción del nuevo usuario con la clave hasheada.
        $stmt = $connection->prepare("INSERT INTO users (dni, name, mail, password) VALUES (?, ?, ?, ?)");
        // Usamos la variable $password_hashed en lugar de la plana $password_wohash
        $stmt->bind_param("ssss", $dni, $name, $mail, $password_hashed);
        if ($stmt->execute()){
            echo "<p style='text-align:center; color: green;'>" . htmlspecialchars("Usuario registrado correctamente.") . "</p>";
        } else {
            echo "<p style='text-align:center; color: red;'>" . htmlspecialchars("Error al registrar el usuario.") . "</p>";
        }
        $stmt->close();
    }
    $verify->close();
    $connection->close();
?>