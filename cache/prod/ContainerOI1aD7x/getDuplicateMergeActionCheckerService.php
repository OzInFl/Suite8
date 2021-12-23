<?php

namespace ContainerOI1aD7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDuplicateMergeActionCheckerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Engine\LegacyHandler\ActionAvailabilityChecker\Checkers\DuplicateMergeActionChecker' shared autowired service.
     *
     * @return \App\Engine\LegacyHandler\ActionAvailabilityChecker\Checkers\DuplicateMergeActionChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Service/ActionAvailabilityChecker/ActionAvailabilityCheckerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/LegacyHandler/ActionAvailabilityChecker/Checkers/DuplicateMergeActionChecker.php';

        return $container->privates['App\\Engine\\LegacyHandler\\ActionAvailabilityChecker\\Checkers\\DuplicateMergeActionChecker'] = new \App\Engine\LegacyHandler\ActionAvailabilityChecker\Checkers\DuplicateMergeActionChecker(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->services['session'] ?? $container->getSessionService()), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()));
    }
}
