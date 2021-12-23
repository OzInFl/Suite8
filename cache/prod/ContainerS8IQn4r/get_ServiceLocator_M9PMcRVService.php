<?php

namespace ContainerS8IQn4r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M9PMcRVService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.M9PMcRV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M9PMcRV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'security' => '?',
        ]);
    }
}
