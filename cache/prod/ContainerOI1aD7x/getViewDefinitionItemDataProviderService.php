<?php

namespace ContainerOI1aD7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getViewDefinitionItemDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\ViewDefinitions\DataProvider\ViewDefinitionItemDataProvider' shared autowired service.
     *
     * @return \App\ViewDefinitions\DataProvider\ViewDefinitionItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/DataProvider/ViewDefinitionItemDataProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/Service/ViewDefinitionsProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/ViewDefinitionsHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/FieldDefinitionsInjectorTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/RecordViewDefinitionHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Service/DefinitionEntryHandlingTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ActionDefinitionProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/RecordActionDefinitionProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/RecordActionDefinitionProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/Service/WidgetDefinitionProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/Service/WidgetDefinitionProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/Service/SubPanelDefinitionProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/SubPanelDefinitionHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/SubpanelTopActionDefinitionProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/SubpanelTopActionDefinitionProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/SubpanelLineActionDefinitionProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/SubpanelLineActionDefinitionProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/ListViewDefinitionHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/BulkActionDefinitionProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/BulkActionDefinitionProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/LineActionDefinitionProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/LineActionDefinitionProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Filters/Service/FilterDefinitionProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Filters/Service/FilterDefinitionProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/ViewDefinitionMappers.php';

        $a = ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState()));
        $b = ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService());
        $c = ($container->privates['App\\FieldDefinitions\\LegacyHandler\\FieldDefinitionsHandler'] ?? $container->load('getFieldDefinitionsHandlerService'));
        $d = ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService'));
        $e = ($container->privates['App\\Engine\\Service\\ActionAvailabilityChecker\\ActionAvailabilityChecker'] ?? $container->load('getActionAvailabilityCheckerService'));
        $f = new \App\ViewDefinitions\Service\WidgetDefinitionProvider($e);
        $g = ($container->services['session'] ?? $container->getSessionService());

        return $container->privates['App\\ViewDefinitions\\DataProvider\\ViewDefinitionItemDataProvider'] = new \App\ViewDefinitions\DataProvider\ViewDefinitionItemDataProvider(new \App\ViewDefinitions\LegacyHandler\ViewDefinitionsHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', $a, $b, $c, new \App\ViewDefinitions\LegacyHandler\RecordViewDefinitionHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', $a, $d, new \App\Data\Service\RecordActionDefinitionProvider($container->parameters['module.recordview.actions'], $e), $f, $container->parameters['module.recordview.sidebar_widgets'], $container->parameters['module.recordview.top_widgets'], $g), new \App\ViewDefinitions\LegacyHandler\SubPanelDefinitionHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', $a, $b, $c, new \App\Process\Service\SubpanelTopActionDefinitionProvider($container->parameters['module.subpanel.top_actions'], $e), new \App\Process\Service\SubpanelLineActionDefinitionProvider($container->parameters['module.subpanel.line_actions'], $e), $g), new \App\ViewDefinitions\LegacyHandler\ListViewDefinitionHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', $a, $d, new \App\Process\Service\BulkActionDefinitionProvider($container->parameters['module.listview.bulk_action'], $e), $f, new \App\Process\Service\LineActionDefinitionProvider($container->parameters['module.listview.line_action'], ($container->privates['App\\Engine\\LegacyHandler\\AclHandler'] ?? $container->load('getAclHandlerService')), $c, $b, ($container->privates['App\\Languages\\LegacyHandler\\AppListStringsHandler'] ?? $container->load('getAppListStringsHandlerService'))), new \App\Filters\Service\FilterDefinitionProvider(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'))), $g, $container->parameters['module.listview.sidebar_widgets']), ($container->privates['App\\ViewDefinitions\\LegacyHandler\\MassUpdateDefinitionHandler'] ?? $container->load('getMassUpdateDefinitionHandlerService')), $d, new \App\ViewDefinitions\LegacyHandler\ViewDefinitionMappers(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\LegacyToFrontendViewDefinitionMapper'] ?? $container->load('getLegacyToFrontendViewDefinitionMapperService'));
            yield 1 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\ListView\\BulkActions\\MassUpdateBulkActionMapper'] ?? ($container->privates['App\\ViewDefinitions\\LegacyHandler\\ListView\\BulkActions\\MassUpdateBulkActionMapper'] = new \App\ViewDefinitions\LegacyHandler\ListView\BulkActions\MassUpdateBulkActionMapper()));
            yield 2 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\RecordView\\RecordThreadDefinitionMapper'] ?? $container->load('getRecordThreadDefinitionMapperService'));
            yield 3 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\RecordView\\RecordViewCurrencyFieldMapper'] ?? $container->load('getRecordViewCurrencyFieldMapperService'));
            yield 4 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\RecordView\\RecordViewDynamicEnumMapper'] ?? ($container->privates['App\\ViewDefinitions\\LegacyHandler\\RecordView\\RecordViewDynamicEnumMapper'] = new \App\ViewDefinitions\LegacyHandler\RecordView\RecordViewDynamicEnumMapper()));
            yield 5 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\RecordView\\RecordViewEmailMapper'] ?? ($container->privates['App\\ViewDefinitions\\LegacyHandler\\RecordView\\RecordViewEmailMapper'] = new \App\ViewDefinitions\LegacyHandler\RecordView\RecordViewEmailMapper()));
            yield 6 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\RecordView\\RecordViewGroupTypeMapper'] ?? $container->load('getRecordViewGroupTypeMapperService'));
            yield 7 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\RecordView\\RecordViewReadOnlyMapper'] ?? ($container->privates['App\\ViewDefinitions\\LegacyHandler\\RecordView\\RecordViewReadOnlyMapper'] = new \App\ViewDefinitions\LegacyHandler\RecordView\RecordViewReadOnlyMapper()));
            yield 8 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\SearchDefs\\SearchDefsDateTypeMapper'] ?? ($container->privates['App\\ViewDefinitions\\LegacyHandler\\SearchDefs\\SearchDefsDateTypeMapper'] = new \App\ViewDefinitions\LegacyHandler\SearchDefs\SearchDefsDateTypeMapper()));
            yield 9 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\SubpanelButtonTraverser'] ?? $container->load('getSubpanelButtonTraverserService'));
        }, 10)), $g));
    }
}
