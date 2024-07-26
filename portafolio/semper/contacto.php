<?php 
// INGRESE EL EMAIL DONDE RECIBIRÁ LOS DATOS DEL FOMULARIO
$para = 'csemper87@gmail.com'; 

$asunto = $_POST["tipo"]; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Nombre: ".$_POST["nombre"]."<br>"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
$MESSAGE_BODY .= "Mensaje: ".nl2br($_POST["mensaje"])."<br>"; 
mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die ("Error al enviar el Formulario !"); 

//MODIFICAR A LA DIRECCIÓN EN SU SERVIDOR
header( 'Location: http://www.carlossemper.com/gracias.html' )
?>