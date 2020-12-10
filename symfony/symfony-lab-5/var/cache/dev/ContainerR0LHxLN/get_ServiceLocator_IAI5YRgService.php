<?php

namespace ContainerR0LHxLN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IAI5YRgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IAI5YRg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IAI5YRg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\LogController::logger' => ['privates', '.service_locator.InZqgaf', 'get_ServiceLocator_InZqgafService', true],
            'App\\Controller\\ProductController::createProduct' => ['privates', '.service_locator.O7Avvig', 'get_ServiceLocator_O7AvvigService', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\ProductController::update' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\LogController:logger' => ['privates', '.service_locator.InZqgaf', 'get_ServiceLocator_InZqgafService', true],
            'App\\Controller\\ProductController:createProduct' => ['privates', '.service_locator.O7Avvig', 'get_ServiceLocator_O7AvvigService', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\ProductController:update' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\LogController::logger' => '?',
            'App\\Controller\\ProductController::createProduct' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Controller\\ProductController::update' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\LogController:logger' => '?',
            'App\\Controller\\ProductController:createProduct' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'App\\Controller\\ProductController:update' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
