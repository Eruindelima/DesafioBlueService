<?php

namespace ContainerBoKqwIL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProdutosControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProdutosController' shared autowired service.
     *
     * @return \App\Controller\ProdutosController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProdutosController.php';

        $container->services['App\\Controller\\ProdutosController'] = $instance = new \App\Controller\ProdutosController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ProdutosController', $container));

        return $instance;
    }
}
