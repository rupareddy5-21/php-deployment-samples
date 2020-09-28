<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\Views\PhpRenderer;
use React\EventLoop\Factory;
use React\ChildProcess\Process;

require './vendor/autoload.php';
include 'helper.php';

$reportCount = num_cpu();
$reportnum = 1;

$app = new \Slim\App();
$container = $app->getContainer();
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig('');
    return $view;
};

$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'index.html');
});

$app->get('/api/marketing/', function (Request $request, Response $response) {
    $jsonResponse = array("response" => "Response OK");
    return $response->withHeader('Content-type', 'application/json')->withJson($jsonResponse, 200);
});

$app->run();
