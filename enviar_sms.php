<?php
require_once '\xampp\htdocs\sms\vendor\twilio\sdk\src\Twilio\autoload.php';

$twilio_sid = 'AC2a87b7a55facc226aa0c613addad0474';
$twilio_token = 'ce9c0c6e7d7fb3aac2948d21a151286b';
$twilio_from = '+5511987654321'; // Número Twilio de origem

$numero = $_POST['numero'];
$mensagem = $_POST['mensagem'];

$client = new Twilio\Rest\Client($twilio_sid, $twilio_token);

$message = $client->messages->create(
    $numero, // Número de destino
    array(
        'from' => $twilio_from,
        'body' => $mensagem
    )
);

echo 'Mensagem enviada com sucesso. ID: ' . $message->sid;
?>

