<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Clases\FiguraGeometrica;

require_once '../vendor/autoload.php';



$app = new \Slim\App([]);



$app->get('[/]', function (Request $request, Response $response) {    
    $response->getBody()->write("GET => Bienvenido!!! ,a SlimFramework");
    return $response;

});


$app->get('/ejercicio15', function ($request, $response, $args) {
    // Show book identified by $args['id']
    // ...
    
    return $response;
});

$app->run();