<?php
//use Psr\Http\Message\ResponseInterface as Response;
//use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$app = AppFactory::create();

/*
$app->get('/', function (Request $request, Response $response, $arg) {
    $response->getBody()->write("Hello world!");
    return $response;
});*/


require __DIR__ . '/Routes.php';

$app->run();