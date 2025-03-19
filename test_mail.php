<?php
$destinatario = "contacto@transmorales.cl, hector.morales@transmorales.cl"; // Reemplaza con tu correo electrónico
$asunto = "Prueba de la función mail()";
$mensaje = "¡Este es un mensaje de prueba para verificar que mail() funciona en el servidor!";
$encabezados = "From: contacto@transmorales.cl\r\n";

if (mail($destinatario, $asunto, $mensaje, $encabezados)) {
    echo "El correo se ha enviado correctamente. La función mail() está habilitada.";
} else {
    echo "Error: La función mail() no está habilitada en este servidor.";
}
?>
