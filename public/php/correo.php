<?php
$destinatario = "";

$nombre = $_POST['nombre'];
$asunto = "Mensaje enviado desde Tienda Cafenort";
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];

$header = "Probando cabecera";
$mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajecompleto, $header);
echo "<script>alert('Correo enviado exitosamente')</script>";
?>
