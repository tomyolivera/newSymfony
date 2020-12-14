<?php

namespace ContainerWrS3bjk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ql3ES0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ql_3ES0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ql_3ES0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::changeBan' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController::delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController::edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController::findUsers' => ['privates', '.service_locator.z4vVS.d', 'get_ServiceLocator_Z4vVS_DService', true],
            'App\\Controller\\ProfileController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\RegisterController::index' => ['privates', '.service_locator.ZEHg8sr', 'get_ServiceLocator_ZEHg8srService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\TaskController::delete' => ['privates', '.service_locator.TfvLzuL', 'get_ServiceLocator_TfvLzuLService', true],
            'App\\Controller\\TaskController::edit' => ['privates', '.service_locator.TfvLzuL', 'get_ServiceLocator_TfvLzuLService', true],
            'App\\Controller\\TaskController::index' => ['privates', '.service_locator.OSbocZ8', 'get_ServiceLocator_OSbocZ8Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminController:changeBan' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController:delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController:edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController:findUsers' => ['privates', '.service_locator.z4vVS.d', 'get_ServiceLocator_Z4vVS_DService', true],
            'App\\Controller\\ProfileController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\RegisterController:index' => ['privates', '.service_locator.ZEHg8sr', 'get_ServiceLocator_ZEHg8srService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\TaskController:delete' => ['privates', '.service_locator.TfvLzuL', 'get_ServiceLocator_TfvLzuLService', true],
            'App\\Controller\\TaskController:edit' => ['privates', '.service_locator.TfvLzuL', 'get_ServiceLocator_TfvLzuLService', true],
            'App\\Controller\\TaskController:index' => ['privates', '.service_locator.OSbocZ8', 'get_ServiceLocator_OSbocZ8Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminController::changeBan' => '?',
            'App\\Controller\\AdminController::delete' => '?',
            'App\\Controller\\AdminController::edit' => '?',
            'App\\Controller\\AdminController::findUsers' => '?',
            'App\\Controller\\ProfileController::index' => '?',
            'App\\Controller\\RegisterController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TaskController::delete' => '?',
            'App\\Controller\\TaskController::edit' => '?',
            'App\\Controller\\TaskController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:changeBan' => '?',
            'App\\Controller\\AdminController:delete' => '?',
            'App\\Controller\\AdminController:edit' => '?',
            'App\\Controller\\AdminController:findUsers' => '?',
            'App\\Controller\\ProfileController:index' => '?',
            'App\\Controller\\RegisterController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TaskController:delete' => '?',
            'App\\Controller\\TaskController:edit' => '?',
            'App\\Controller\\TaskController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
