<?php
namespace Trwip\Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ViagemControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        // creates a new controller based on the default route
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
            return new Response("Sua viagem começa aqui");
            //return $app->redirect('/');
        });

        $controllers->get('/criar', function (Application $app) {
            $sql = "SELECT * FROM perfil";
            $perfis = $app['db']->fetchAll($sql);

            $sql = "SELECT * FROM transporte";
            $transportes = $app['db']->fetchAll($sql);

            return $app['twig']->render('create-travel.twig', array('perfis' => $perfis,
                                                                    'transportes' => $transportes));
        })->bind('create-travel');

        $controllers->post('/salvar-organizacao', function (Request $req, Application $app) {
            $data = $req->request->all();

            $post = new \TRWIP\Model\Viagem;
            //$post->setXXX($data['titulo']);
            
            //$em->persist($post);
            //$em->flush();

            if ($post->getId()) {
                return $app->redirect($app['url_generator']->generate('sucesso'));
            } else {
                $app->abort(500, 'Erro de processamento');
            }
        })->bind('save-organization');

        $controllers->get('/pesquisar', function (Application $app) {
            return $app['twig']->render('search-travel.twig');
        })->bind('find-travel');

        return $controllers;
    }
}
