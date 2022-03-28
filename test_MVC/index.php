<?php

define('URL', str_replace("index.php","", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));


require_once('controllers/Router.php');

$router = new Router();
$router->routeReq();
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="This website is used to manage the different users of LinkedOut. This is accessible only by the admin">
<meta name="theme-color" content="#317EFB"/>
<link rel="manifest" href="manifest.json">
<link rel="serviceWorker" href="ServiceWorker.js">
<link rel="apple-touch-icon" href="https://cdn.glitch.com/49d34dc6-8fbd-46bb-8221-b99ffd36f1af%2Ftouchicon-180.png?v=1566411949736%22%3E">