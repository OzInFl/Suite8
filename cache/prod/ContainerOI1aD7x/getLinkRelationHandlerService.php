<?php

namespace ContainerOI1aD7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLinkRelationHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Process\LegacyHandler\LinkRelationHandler' shared autowired service.
     *
     * @return \App\Process\LegacyHandler\LinkRelationHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/LegacyHandler/LinkRelationHandler.php';

        $container->privates['App\\Process\\LegacyHandler\\LinkRelationHandler'] = $instance = new \App\Process\LegacyHandler\LinkRelationHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->services['session'] ?? $container->getSessionService()), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), ($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()));

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));

        return $instance;
    }
}
