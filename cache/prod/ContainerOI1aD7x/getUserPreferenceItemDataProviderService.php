<?php

namespace ContainerOI1aD7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserPreferenceItemDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\UserPreferences\DataProvider\UserPreferenceItemDataProvider' shared autowired service.
     *
     * @return \App\UserPreferences\DataProvider\UserPreferenceItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/UserPreferences/DataProvider/UserPreferenceItemDataProvider.php';

        return $container->privates['App\\UserPreferences\\DataProvider\\UserPreferenceItemDataProvider'] = new \App\UserPreferences\DataProvider\UserPreferenceItemDataProvider(($container->privates['App\\UserPreferences\\LegacyHandler\\UserPreferenceHandler'] ?? $container->load('getUserPreferenceHandlerService')));
    }
}
