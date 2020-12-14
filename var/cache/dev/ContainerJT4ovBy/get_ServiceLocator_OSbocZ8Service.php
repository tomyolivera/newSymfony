<?php

namespace ContainerJT4ovBy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OSbocZ8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OSbocZ8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OSbocZ8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'taskRepository' => ['privates', 'App\\Repository\\TaskRepository', 'getTaskRepositoryService', true],
        ], [
            'taskRepository' => 'App\\Repository\\TaskRepository',
        ]);
    }
}
