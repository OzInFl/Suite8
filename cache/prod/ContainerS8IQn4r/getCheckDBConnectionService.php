<?php

namespace ContainerS8IQn4r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckDBConnectionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\Service\Installation\Steps\CheckDBConnection' autowired service.
     *
     * @return \App\Install\Service\Installation\Steps\CheckDBConnection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Model/ProcessStepInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/Installation/InstallStepInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Model/ProcessStepTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/Installation/InstallStepTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/Installation/Steps/CheckDBConnection.php';

        $container->factories['service_container']['App\\Install\\Service\\Installation\\Steps\\CheckDBConnection'] = function () use ($container) {
            return new \App\Install\Service\Installation\Steps\CheckDBConnection(($container->privates['App\\Install\\LegacyHandler\\InstallHandler'] ?? $container->load('getInstallHandlerService')));
        };

        return $container->factories['service_container']['App\\Install\\Service\\Installation\\Steps\\CheckDBConnection']();
    }
}
