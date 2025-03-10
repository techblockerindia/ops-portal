<?php
require 'db.php';
require 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('936468136425-ma7sod0cbbt59kdhthaonmergmcrp0ur.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('https://solid-sniffle-5g5qg9jpq796347g4-3000.app.github.dev');
$client->addScope(['email', 'profile']);


if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $oauth = new Google_Service_Oauth2($client);
    $google_account_info = $oauth->userinfo->get();
    $email = $google_account_info->email;

    // Check if user exists in database
    $stmt = $conn->prepare("SELECT role FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute(); 
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        $_SESSION['user_email'] = $email;
        $_SESSION['user_role'] = $user['role'];
        header("Location: index.php");
        exit;
    } else {
        echo "Access Denied. Contact Admin.";
    }
}
?>
