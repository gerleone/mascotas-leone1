<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['Deje su comentario'];

$mensaje = "este mensajefue enviado por:" . $nombre . ",\r\n";
$mensaje = "su email es:" . $mail . "\r\n";
$mensaje = "mensaje:" . $_POST['mensaje'] . "\r\n";
$mensaje = "enviado el:" . date('d/m/y' , time());


$destinatario = 'gerleone@hotmail.com';
$asunto = 'guarderia patan y su pandilla';

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header('Location:contacto.html');
?>
