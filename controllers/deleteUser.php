<?php
    if (isset($_GET['id'])) {
        include "config/dbConnection.php";

        // Uso de intval() 
        $id = intval($_GET['id']);
        $stmt = $connection->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            header("Location: "); // listar_usuarios.php
            exit; // IMPORTANTE: Detener la ejecución después de la redirección
        } else {
            echo "Error al borrar usuario.";
        }
        $stmt->close();
        $connection->close();
    }
?>