<?php

namespace ContainerS8IQn4r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpportunitiesBySalesStagePipelineService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Module\Opportunities\Statistics\Series\OpportunitiesBySalesStagePipeline' shared autowired service.
     *
     * @return \App\Module\Opportunities\Statistics\Series\OpportunitiesBySalesStagePipeline
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/Service/StatisticsProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/StatisticsHandlingTrait.php';
        include_once \dirname(__DIR__, 3).'/core/modules/Opportunities/Statistics/Series/OpportunitiesBySalesStagePipeline.php';

        return $container->privates['App\\Module\\Opportunities\\Statistics\\Series\\OpportunitiesBySalesStagePipeline'] = new \App\Module\Opportunities\Statistics\Series\OpportunitiesBySalesStagePipeline(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->privates['App\\Data\\LegacyHandler\\ListDataQueryHandler'] ?? $container->load('getListDataQueryHandlerService')), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), ($container->services['session'] ?? $container->getSessionService()));
    }
}
