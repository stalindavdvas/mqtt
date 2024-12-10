<?php
// Incluir el archivo que contiene la lógica de MQTT
require 'mqtt.php';

// Publicar el mensaje y obtener el resultado
$message = publishMessage();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar mensaje MQTT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Resultado de la publicación MQTT</h1>
    <p><strong>Tema:</strong> test/name</p>
    <p><strong>Mensaje:</strong> <?php echo $message; ?></p>
</div>

</body>
</html>
