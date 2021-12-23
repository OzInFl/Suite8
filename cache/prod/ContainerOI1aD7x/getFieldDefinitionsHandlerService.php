<?php

namespace ContainerOI1aD7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFieldDefinitionsHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\FieldDefinitions\LegacyHandler\FieldDefinitionsHandler' shared autowired service.
     *
     * @return \App\FieldDefinitions\LegacyHandler\FieldDefinitionsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/FieldDefinitions/Service/FieldDefinitionsProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/FieldDefinitions/LegacyHandler/FieldDefinitionsHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/FieldDefinitions/LegacyHandler/FieldDefinitionMappers.php';

        return $container->privates['App\\FieldDefinitions\\LegacyHandler\\FieldDefinitionsHandler'] = new \App\FieldDefinitions\LegacyHandler\FieldDefinitionsHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), new \App\FieldDefinitions\LegacyHandler\FieldDefinitionMappers(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\FieldDefinitions\\LegacyHandler\\CurrencyDropdownFunctionDefinitionMapper'] ?? $container->load('getCurrencyDropdownFunctionDefinitionMapperService'));
            yield 1 => ($container->privates['App\\FieldDefinitions\\LegacyHandler\\GroupedFieldDefinitionMapper'] ?? $container->load('getGroupedFieldDefinitionMapperService'));
            yield 2 => ($container->privates['App\\FieldDefinitions\\LegacyHandler\\LegacyCurrencyFieldDefinitionMapper'] ?? ($container->privates['App\\FieldDefinitions\\LegacyHandler\\LegacyCurrencyFieldDefinitionMapper'] = new \App\FieldDefinitions\LegacyHandler\LegacyCurrencyFieldDefinitionMapper()));
            yield 3 => ($container->privates['App\\FieldDefinitions\\LegacyHandler\\LegacyDynamicEnumFieldDefinitionMapper'] ?? ($container->privates['App\\FieldDefinitions\\LegacyHandler\\LegacyDynamicEnumFieldDefinitionMapper'] = new \App\FieldDefinitions\LegacyHandler\LegacyDynamicEnumFieldDefinitionMapper()));
            yield 4 => ($container->privates['App\\FieldDefinitions\\LegacyHandler\\LegacyGroupedFieldDefinitionMapper'] ?? ($container->privates['App\\FieldDefinitions\\LegacyHandler\\LegacyGroupedFieldDefinitionMapper'] = new \App\FieldDefinitions\LegacyHandler\LegacyGroupedFieldDefinitionMapper()));
            yield 5 => ($container->privates['App\\FieldDefinitions\\LegacyHandler\\LegacyInlineEditFieldDefinitionMapper'] ?? $container->load('getLegacyInlineEditFieldDefinitionMapperService'));
            yield 6 => ($container->privates['App\\FieldDefinitions\\LegacyHandler\\LegacyReadOnlyFieldDefinitionMapper'] ?? ($container->privates['App\\FieldDefinitions\\LegacyHandler\\LegacyReadOnlyFieldDefinitionMapper'] = new \App\FieldDefinitions\LegacyHandler\LegacyReadOnlyFieldDefinitionMapper()));
            yield 7 => ($container->privates['App\\FieldDefinitions\\LegacyHandler\\LegacyToFrontendFieldDefinitionMapper'] ?? $container->load('getLegacyToFrontendFieldDefinitionMapperService'));
        }, 8)), ($container->services['session'] ?? $container->getSessionService()));
    }
}
