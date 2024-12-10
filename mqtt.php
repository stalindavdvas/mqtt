<?php

require 'vendor/autoload.php';  // Asegúrate de tener Composer y autoload.php disponible

use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\ConnectionSettings;

function publishMessage() {
    $server = 'localhost';  // Dirección del broker MQTT (Mosquitto)
    $port = 1883;  // Puerto de conexión
    $topic = 'test/name';  // Tema MQTT
    $message = 'Hola desde PHP MQTT! soy Stalin Vasco';  // Mensaje a publicar

    $client = new MqttClient($server, $port);

    // Configuración de la conexión (puedes añadir autenticación si es necesario)
    $connectionSettings = new ConnectionSettings();
    $connectionSettings->setUsername('');
    $connectionSettings->setPassword('');

    try {
        // Conectar al servidor MQTT
        $client->connect($connectionSettings);

        // Publicar el mensaje en el tema 'test/name'
        $client->publish($topic, $message, 0);

        // Desconectar
        $client->disconnect();

        return $message;
    } catch (\Exception $e) {
        // Capturar cualquier excepción
        return "Error: " . $e->getMessage();
    }
}
?>
