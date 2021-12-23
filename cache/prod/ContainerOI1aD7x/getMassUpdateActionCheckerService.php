<?php

namespace ContainerOI1aD7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassUpdateActionCheckerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Engine\Service\ActionAvailabilityChecker\Checkers\MassUpdateActionChecker' shared autowired service.
     *
     * @return \App\Engine\Service\ActionAvailabilityChecker\Checkers\MassUpdateActionChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Service/ActionAvailabilityChecker/ActionAvailabilityCheckerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Service/ActionAvailabilityChecker/Checkers/MassUpdateActionChecker.php';

        return $container->privates['App\\Engine\\Service\\ActionAvailabilityChecker\\Checkers\\MassUpdateActionChecker'] = new \App\Engine\Service\ActionAvailabilityChecker\Checkers\MassUpdateActionChecker(($container->privates['App\\ViewDefinitions\\LegacyHandler\\MassUpdateDefinitionHandler'] ?? $container->load('getMassUpdateDefinitionHandlerService')));
    }
}
