<?php
// Conectando el Formulario de Contacto
$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['message'];

// Formato del mensaje
$contenido = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$contenido .= "Su correo electrónico es " . $mail . "\r\n";
$contenido .= "Mensaje: " . $_POST['message'] . "\r\n";
$contenido .= "Enviado el " . date('d/m/Y', time());

$destinatario = 'sandres824@gmail.com';
$asunto = 'Este mensaje fue enviado desde el sitio web "La Quinta Hotel"';

// Función mail
mail($destinatario, $asunto, utf8_decode($contenido), $header);

// Redirección después de enviar el formulario
header('Location: mensajeContacto.html');
?>
