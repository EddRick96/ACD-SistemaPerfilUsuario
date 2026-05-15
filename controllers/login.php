<?php
session_start();
require_once "config/dbConnection.php";

if (isset($_POST['btnlogin'])) {
    $mail = $_POST["txtmail"];
    $pass     = $_POST["txtpassword"];
    //password hash
    $buscandousu = mysqli_query($connection, "SELECT * FROM users WHERE mail = '" . $mail . "' and password = '" . $pass . "'");
    $nr = mysqli_num_rows($buscandousu);

    if ($nr == 1) {
        $_SESSION['usuarioingresando'] = $mail;
        header("Location: principal.php");
    } else if ($nr == 0) {
        echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
    }
}
?>
