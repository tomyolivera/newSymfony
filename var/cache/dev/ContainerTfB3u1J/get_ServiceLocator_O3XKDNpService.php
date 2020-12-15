<?php

namespace ContainerTfB3u1J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O3XKDNpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o3XKDNp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o3XKDNp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'taskRepository' => ['privates', 'App\\Repository\\TaskRepository', 'getTaskRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.o3XKDNp.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.o3XKDNp": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'taskRepository' => 'App\\Repository\\TaskRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
