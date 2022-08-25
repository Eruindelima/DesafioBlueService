<?php

namespace ContainerOAjKk2Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DEBrGLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DEBr_gL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DEBr_gL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'caracteristica' => ['privates', '.errored..service_locator.DEBr_gL.App\\Entity\\Caracteristicas', NULL, 'Cannot autowire service ".service_locator.DEBr_gL": it references class "App\\Entity\\Caracteristicas" but no such service exists.'],
        ], [
            'caracteristica' => 'App\\Entity\\Caracteristicas',
        ]);
    }
}