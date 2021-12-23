<?php

namespace ContainerS8IQn4r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInstallActionHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\Service\Installation\InstallActionHandler' shared autowired service.
     *
     * @return \App\Install\Service\Installation\InstallActionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/Installation/InstallActionHandler.php';

        return $container->privates['App\\Install\\Service\\Installation\\InstallActionHandler'] = new \App\Install\Service\Installation\InstallActionHandler(($container->privates['App\\Install\\Service\\Installation\\InstallStepHandler'] ?? $container->load('getInstallStepHandlerService')));
    }
}
