<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$settings = require "../src/settings.php";
$app = new \Slim\App($settings);

require "../src/dependencias.php";
require "../src/middleware.php";
require "../src/rutas.php";

$app->run();

?>