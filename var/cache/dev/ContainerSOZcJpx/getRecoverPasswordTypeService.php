<?php

namespace ContainerSOZcJpx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecoverPasswordTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\RecoverPasswordType' shared autowired service.
     *
     * @return \App\Form\Type\RecoverPasswordType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/RecoverPasswordType.php';

        return $container->privates['App\\Form\\Type\\RecoverPasswordType'] = new \App\Form\Type\RecoverPasswordType();
    }
}
