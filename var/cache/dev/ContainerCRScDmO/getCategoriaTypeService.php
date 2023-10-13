<?php

namespace ContainerCRScDmO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoriaTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CategoriaType' shared autowired service.
     *
     * @return \App\Form\CategoriaType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CategoriaType.php';

        return $container->privates['App\\Form\\CategoriaType'] = new \App\Form\CategoriaType();
    }
}
