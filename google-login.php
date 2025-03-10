<?php
require 'vendor/autoload.php';

session_start();

$client = new Google\Client();
$client->setClientId('936468136425-ma7sod0cbbt59kdhthaonmergmcrp0ur.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('https://solid-sniffle-5g5qg9jpq796347g4-3000.app.github.dev');
$client->addScope(['email', 'profile']);

$authUrl = $client->createAuthUrl();
header('Location: ' . $authUrl);
exit;
?>
 