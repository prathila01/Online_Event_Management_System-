<?php
require_once "logingoogle/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("158113465248-lcctmmjc77k9u13g97r9mafmbnhiv5g1.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("epms");
$gClient->setRedirectUri("http://localhost/login-with-google/controller.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

// login URL
$login_url = $gClient->createAuthUrl();
?>