<?php

namespace ContainerS8IQn4r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactLastTouchPointService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Module\Contacts\Statistics\ContactLastTouchPoint' shared autowired service.
     *
     * @return \App\Module\Contacts\Statistics\ContactLastTouchPoint
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Data/LegacyHandler/PresetDataHandlers/SubpanelDataQueryHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/Service/StatisticsProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/StatisticsHandlingTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/DateTimeStatisticsHandlingTrait.php';
        include_once \dirname(__DIR__, 3).'/core/modules/Contacts/Statistics/ContactLastTouchPoint.php';

        return $container->privates['App\\Module\\Contacts\\Statistics\\ContactLastTouchPoint'] = new \App\Module\Contacts\Statistics\ContactLastTouchPoint(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), ($container->services['session'] ?? $container->getSessionService()));
    }
}