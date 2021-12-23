<?php

namespace ContainerS8IQn4r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCurrencyPreferenceMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\UserPreferences\LegacyHandler\CurrencyPreferenceMapper' shared autowired service.
     *
     * @return \App\UserPreferences\LegacyHandler\CurrencyPreferenceMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/UserPreferences/LegacyHandler/UserPreferencesMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/UserPreferences/LegacyHandler/CurrencyPreferenceMapper.php';

        return $container->privates['App\\UserPreferences\\LegacyHandler\\CurrencyPreferenceMapper'] = new \App\UserPreferences\LegacyHandler\CurrencyPreferenceMapper(($container->privates['App\\Currency\\LegacyHandler\\CurrencyHandler'] ?? $container->load('getCurrencyHandlerService')));
    }
}