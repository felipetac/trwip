<?php
require('../vendor/autoload.php');
require('bootstrap.php');

<<<<<<< HEAD
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
=======
//Rotas do site
$app->get('/', function () use ($app) {
    $app['monolog']->addDebug('Chamou a rota /');
    return $app['twig']->render('index.twig');
})->bind('index');

$app->get('/contato', function () use ($app) {
    $app['monolog']->addDebug('Chamou a rota /contato');
>>>>>>> c4ec3b73c302ee0eacc1743bb0d745b52bdc589c
    return $app['twig']->render('contact.twig');
})->bind('contact');

//Rotas da viagem
$app['monolog']->addDebug('Montou a rota de viagem');
$app->mount('/viagem', new Trwip\Controller\ViagemControllerProvider());

$app['monolog']->addDebug('Executou a aplicacao');
$app->run();
