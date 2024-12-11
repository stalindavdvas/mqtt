## MQTT Example with PHP
### Table of Contents
- Install Composer
- Create a new project and add the php-mqtt/client library
- Configure the PHP code for MQTT
- Verify the MQTT Broker (Mosquitto)
- Configure XAMPP
- Run the script
## Install Composer
- Download Composer from the official website.
- Follow the installation instructions for your operating system.
- Verify that Composer is installed correctly by running composer --version in your terminal.
## Create a new project
- Create a new directory for your project and navigate to it in your terminal.
- Initialize Composer by running composer init.
- Follow the prompts to create a basic composer.json file.
- Install the php-mqtt/client library by running composer require php-mqtt/client.
##Configure PHP code
- Create a new PHP file (e.g. index.php) in the root of your project.
- Require the Composer autoloader by adding require 'vendor/autoload.php'; at the top of your PHP file.
- Use the php-mqtt/client library to connect to your MQTT broker and publish a message.
## Example code:
PHP
`<?php
require 'vendor/autoload.php';

use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\ConnectionSettings;

$server = 'localhost';
$port = 1883;

$client = new MqttClient($server, $port);

$connectionSettings = new ConnectionSettings();
$connectionSettings->setUsername('');
$connectionSettings->setPassword('');

$client->connect($connectionSettings);

$client->publish('test/name', 'Hello from PHP MQTT!', 0);

$client->disconnect();

echo "Message published successfully!";
?>`
## Verify Mosquitto
- Make sure Mosquitto is running on your local machine. If you haven't already, start Mosquitto by running mosquitto -v.
- Verify that Mosquitto is configured correctly and accessible from other machines or clients.
## Configure XAMPP
- Make sure XAMPP is running on your local machine. Start Apache (and MySQL if needed) from the XAMPP control panel.
- Verify that the php.ini file is configured correctly.
## Run the script
- Open a web browser and navigate to the URL of your PHP script (e.g. http://localhost/mqtt-example/index.php).
- The script should execute and publish a message to the test/name topic.
