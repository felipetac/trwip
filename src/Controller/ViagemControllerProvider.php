<?php
namespace Trwip\Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class ViagemControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        // creates a new controller based on the default route
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
            return $app->redirect('/');
        });

        $controllers->get('/nova', function (Application $app) {
            return $app['twig']->render('create-travel.twig');
        })->bind('create-travel');

        $controllers->get('/listar', function (Application $app) {
            return $app['twig']->render('create-travel.twig');
        })->bind('find-travel');

        return $controllers;
    }
}