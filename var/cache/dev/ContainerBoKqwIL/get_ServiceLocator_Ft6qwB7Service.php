<?php

namespace ContainerBoKqwIL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ft6qwB7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ft6qwB7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ft6qwB7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'caracteristicasRepository' => ['privates', 'App\\Repository\\CaracteristicasRepository', 'getCaracteristicasRepositoryService', true],
        ], [
            'caracteristicasRepository' => 'App\\Repository\\CaracteristicasRepository',
        ]);
    }
}
