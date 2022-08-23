<?php

namespace ContainerEckYayI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Runtime_SerializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.runtime.serializer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\SerializerRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SerializerRuntime.php';

        return $container->privates['twig.runtime.serializer'] = new \Symfony\Bridge\Twig\Extension\SerializerRuntime(($container->privates['debug.serializer'] ?? $container->load('getDebug_SerializerService')));
    }
}
