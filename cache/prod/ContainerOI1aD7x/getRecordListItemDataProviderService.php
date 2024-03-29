<?php

namespace ContainerOI1aD7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecordListItemDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Data\DataProvider\RecordListItemDataProvider' shared autowired service.
     *
     * @return \App\Data\DataProvider\RecordListItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/DataProvider/RecordListItemDataProvider.php';

        return $container->privates['App\\Data\\DataProvider\\RecordListItemDataProvider'] = new \App\Data\DataProvider\RecordListItemDataProvider(($container->privates['App\\Data\\LegacyHandler\\RecordListHandler'] ?? $container->load('getRecordListHandlerService')));
    }
}
