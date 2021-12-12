<?php

namespace ContainerSOZcJpx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R5xUEuXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.r5xUEuX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.r5xUEuX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'area' => ['privates', '.errored..service_locator.r5xUEuX.App\\Entity\\Areas', NULL, 'Cannot autowire service ".service_locator.r5xUEuX": it references class "App\\Entity\\Areas" but no such service exists.'],
        ], [
            'area' => 'App\\Entity\\Areas',
        ]);
    }
}
