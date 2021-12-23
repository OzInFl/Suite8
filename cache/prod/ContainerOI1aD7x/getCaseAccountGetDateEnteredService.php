<?php

namespace ContainerOI1aD7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCaseAccountGetDateEnteredService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Module\Cases\Statistics\CaseAccountGetDateEntered' shared autowired service.
     *
     * @return \App\Module\Cases\Statistics\CaseAccountGetDateEntered
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/Service/StatisticsProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/StatisticsHandlingTrait.php';
        include_once \dirname(__DIR__, 3).'/core/modules/Cases/Statistics/CaseAccountGetDateEntered.php';

        return $container->privates['App\\Module\\Cases\\Statistics\\CaseAccountGetDateEntered'] = new \App\Module\Cases\Statistics\CaseAccountGetDateEntered(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->services['session'] ?? $container->getSessionService()));
    }
}
