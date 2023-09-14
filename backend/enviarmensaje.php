<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


// Datos para el correo
$destinatario = "rainier86@gmail.com";
$asunto = "Contacto pagina web Businet";

$carta = "Nombre: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);

header('Location:mensaje-de-envio.html');


?>