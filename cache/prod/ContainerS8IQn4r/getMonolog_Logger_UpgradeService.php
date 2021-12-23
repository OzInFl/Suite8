<?php

namespace ContainerS8IQn4r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_UpgradeService extends App_KernelProdContainer
{
    /*
     * Gets the public 'monolog.logger.upgrade' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['monolog.logger.upgrade'] = $instance = new \Symfony\Bridge\Monolog\Logger('upgrade');

        $instance->pushHandler(($container->privates['monolog.handler.upgrade'] ?? $container->load('getMonolog_Handler_UpgradeService')));

        return $instance;
    }
}
