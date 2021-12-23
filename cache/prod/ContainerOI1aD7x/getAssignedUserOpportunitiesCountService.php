<?php

namespace ContainerOI1aD7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssignedUserOpportunitiesCountService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Module\Users\Statistics\AssignedUserOpportunitiesCount' shared autowired service.
     *
     * @return \App\Module\Users\Statistics\AssignedUserOpportunitiesCount
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Data/LegacyHandler/PresetDataHandlers/SubpanelDataQueryHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/Service/StatisticsProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/StatisticsHandlingTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/LegacyHandler/SecurityFiltersTrait.php';
        include_once \dirname(__DIR__, 3).'/core/modules/Users/Statistics/AssignedUserOpportunitiesCount.php';

        $container->privates['App\\Module\\Users\\Statistics\\AssignedUserOpportunitiesCount'] = $instance = new \App\Module\Users\Statistics\AssignedUserOpportunitiesCount(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), ($container->privates['App\\Data\\LegacyHandler\\PreparedStatementHandler'] ?? $container->load('getPreparedStatementHandlerService')), ($container->services['session'] ?? $container->getSessionService()));

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));

        return $instance;
    }
}
