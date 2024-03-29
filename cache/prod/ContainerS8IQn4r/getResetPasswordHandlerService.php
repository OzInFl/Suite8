<?php

namespace ContainerS8IQn4r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Process\LegacyHandler\ResetPasswordHandler' shared autowired service.
     *
     * @return \App\Process\LegacyHandler\ResetPasswordHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/LegacyHandler/ResetPasswordHandler.php';

        $container->privates['App\\Process\\LegacyHandler\\ResetPasswordHandler'] = $instance = new \App\Process\LegacyHandler\ResetPasswordHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->services['session'] ?? $container->getSessionService()));

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));

        return $instance;
    }
}
