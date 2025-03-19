<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar los datos enviados desde el formulario
    $nombre = htmlspecialchars($_POST['Nombre']);
    $empresa = htmlspecialchars($_POST['Empresa']);
    $email = htmlspecialchars($_POST['Email']);
    $telefono = htmlspecialchars($_POST['tel']);
    $mensaje = htmlspecialchars($_POST['Mensaje']);

    // Configuración del correo
    $destinatario = "contacto@transmorales.cl, hector.morales@transmorales.cl"; // Reemplaza con tu dirección de correo
    $asunto = "Nueva solicitud de cotización";

    // Construir el cuerpo del correo
    $cuerpoMensaje = "Has recibido una nueva solicitud de cotización:\n\n";
    $cuerpoMensaje .= "Nombre: $nombre\n";
    $cuerpoMensaje .= "Empresa: $empresa\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Teléfono: $telefono\n";
    $cuerpoMensaje .= "Mensaje: $mensaje\n";

    // Encabezados del correo
    $encabezados = "From: $email\r\n";
    $encabezados .= "Reply-To: $email\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpoMensaje, $encabezados)) {
        echo "Gracias por contactarnos. ¡Tu mensaje fue enviado con éxito!";
    } else {
        echo "Lo sentimos, hubo un error al enviar tu mensaje. Intenta nuevamente más tarde.";
    }
} else {
    echo "Método no permitido.";
}
?>
