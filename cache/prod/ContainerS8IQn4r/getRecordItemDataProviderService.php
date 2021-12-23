<?php

namespace ContainerS8IQn4r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecordItemDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Data\DataProvider\RecordItemDataProvider' shared autowired service.
     *
     * @return \App\Data\DataProvider\RecordItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/DataProvider/RecordItemDataProvider.php';

        return $container->privates['App\\Data\\DataProvider\\RecordItemDataProvider'] = new \App\Data\DataProvider\RecordItemDataProvider(($container->privates['App\\Data\\LegacyHandler\\RecordHandler'] ?? $container->load('getRecordHandlerService')));
    }
}
