<?php

namespace ContainerS8IQn4r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserPreferenceHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\UserPreferences\LegacyHandler\UserPreferenceHandler' shared autowired service.
     *
     * @return \App\UserPreferences\LegacyHandler\UserPreferenceHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/UserPreferences/Service/UserPreferencesProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/UserPreferences/LegacyHandler/UserPreferenceHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/UserPreferences/LegacyHandler/UserPreferencesMappers.php';

        return $container->privates['App\\UserPreferences\\LegacyHandler\\UserPreferenceHandler'] = new \App\UserPreferences\LegacyHandler\UserPreferenceHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), $container->parameters['legacy.exposed_user_preferences'], new \App\UserPreferences\LegacyHandler\UserPreferencesMappers(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\UserPreferences\\LegacyHandler\\CurrencyPreferenceMapper'] ?? $container->load('getCurrencyPreferenceMapperService'));
            yield 1 => ($container->privates['App\\UserPreferences\\LegacyHandler\\DateFormatPreferenceMapper'] ?? $container->load('getDateFormatPreferenceMapperService'));
            yield 2 => ($container->privates['App\\UserPreferences\\LegacyHandler\\TimeFormatPreferenceMapper'] ?? $container->load('getTimeFormatPreferenceMapperService'));
        }, 3)), $container->parameters['legacy.user_preferences_key_map'], ($container->services['session'] ?? $container->getSessionService()));
    }
}
