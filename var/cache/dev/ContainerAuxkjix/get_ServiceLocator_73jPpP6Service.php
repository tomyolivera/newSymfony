<?php

namespace ContainerAuxkjix;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_73jPpP6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.73jPpP6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.73jPpP6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'taskRepository' => ['privates', 'App\\Repository\\TaskRepository', 'getTaskRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.73jPpP6.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.73jPpP6": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'encoder' => '?',
            'taskRepository' => 'App\\Repository\\TaskRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
