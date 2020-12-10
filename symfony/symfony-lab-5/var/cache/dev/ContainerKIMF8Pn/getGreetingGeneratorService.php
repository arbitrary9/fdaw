<?php

namespace ContainerKIMF8Pn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGreetingGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\GreetingGenerator' shared autowired service.
     *
     * @return \App\GreetingGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GreetingGenerator.php';

        return $container->privates['App\\GreetingGenerator'] = new \App\GreetingGenerator(($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}
