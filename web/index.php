<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function () use ($app) {
    $app['monolog']->addDebug('logging output.');
    return $app['twig']->render('index.twig');
})->bind('index');

$app->mount('/viagem', new Trwip\Controller\ViagemControllerProvider());

$app->get('/contato', function () use ($app) {
    $app['monolog']->addDebug('enter in contact page.');
    return $app['twig']->render('contact.twig');
})->bind('contact');

$app->run();
