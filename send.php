<?php

	$destino= "forza1708@gmail.com";
	$nombre= "_Post["nombre"]";
	$mail= "_Post["mail"]";
	$edad= "_Post["edad"]";
	$calificacion= "_Post["calificacion"]";
	$mensaje= "_Post["mensaje"]";

	$contenido= "Nombre: ". $nombre . "\nMail: " . $mail . "\nEdad: " . $edad . "\nCalificacion" . $calificacion . "\nMensaje: " . $mensaje;

	mail($destino, "Contacto", $contenido);
	
	header("location:gracias.html");
?>
