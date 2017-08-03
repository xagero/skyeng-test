<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 14:55
 */

chdir(dirname(__DIR__));
require __DIR__ . '/../vendor/autoload.php';

use Psr\Container\ContainerInterface;
use Zend\Expressive\Application;
use Zend\Expressive\Helper\ServerUrlMiddleware;
use Zend\Expressive\Helper\UrlHelperMiddleware;
use Zend\Expressive\Middleware;
use Zend\Stratigility\Middleware\ErrorHandler;

/** @var ContainerInterface $container */
$container = require __DIR__ . '/../config/container.php';

/** @var Application $app */
$app = $container->get(Application::class);

//$app->pipe(ErrorHandler::class);
$app->pipe(ServerUrlMiddleware::class);

$app->pipeRoutingMiddleware();
$app->pipe(Middleware\ImplicitHeadMiddleware::class);
$app->pipe(Middleware\ImplicitOptionsMiddleware::class);
$app->pipe(UrlHelperMiddleware::class);
$app->pipeDispatchMiddleware();
$app->pipe(Middleware\NotFoundHandler::class);

/** Home route, just example */
$app->get('/', App\Action\HomeAction::class);

$app->get('/api/exercises', Exercises\Action\AnswerAction::class);


$app->run();
