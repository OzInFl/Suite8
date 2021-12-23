<?php

namespace ContainerOI1aD7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatisticsProviderRegistryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Statistics\Service\StatisticsProviderRegistry' shared autowired service.
     *
     * @return \App\Statistics\Service\StatisticsProviderRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/Service/StatisticsProviderRegistry.php';

        return $container->privates['App\\Statistics\\Service\\StatisticsProviderRegistry'] = new \App\Statistics\Service\StatisticsProviderRegistry(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Statistics\\LegacyHandler\\DefaultError'] ?? ($container->privates['App\\Statistics\\LegacyHandler\\DefaultError'] = new \App\Statistics\LegacyHandler\DefaultError()));
            yield 1 => ($container->privates['App\\Statistics\\LegacyHandler\\SubpanelDefault'] ?? $container->load('getSubpanelDefaultService'));
            yield 2 => ($container->privates['App\\Module\\Accounts\\Statistics\\Series\\AccountsNewByMonth'] ?? $container->load('getAccountsNewByMonthService'));
            yield 3 => ($container->privates['App\\Module\\Activities\\Statistics\\Subpanels\\SubPanelActivitiesNextDate'] ?? $container->load('getSubPanelActivitiesNextDateService'));
            yield 4 => ($container->privates['App\\Module\\Campaigns\\Statistics\\Subpanels\\SubPanelCampaignsLastReceived'] ?? $container->load('getSubPanelCampaignsLastReceivedService'));
            yield 5 => ($container->privates['App\\Module\\Cases\\Statistics\\CaseAccountGetDateEntered'] ?? $container->load('getCaseAccountGetDateEnteredService'));
            yield 6 => ($container->privates['App\\Module\\Cases\\Statistics\\CaseDaysOpen'] ?? $container->load('getCaseDaysOpenService'));
            yield 7 => ($container->privates['App\\Module\\Cases\\Statistics\\CasesPerAccount'] ?? $container->load('getCasesPerAccountService'));
            yield 8 => ($container->privates['App\\Module\\Cases\\Statistics\\Subpanels\\SubPanelCasesCount'] ?? $container->load('getSubPanelCasesCountService'));
            yield 9 => ($container->privates['App\\Module\\Contacts\\Statistics\\ContactLastTouchPoint'] ?? $container->load('getContactLastTouchPointService'));
            yield 10 => ($container->privates['App\\Module\\Contracts\\Statistics\\Subpanels\\SubPanelContractsRenewalDate'] ?? $container->load('getSubPanelContractsRenewalDateService'));
            yield 11 => ($container->privates['App\\Module\\Events\\Statistics\\Subpanels\\SubPanelEventsLastDate'] ?? $container->load('getSubPanelEventsLastDateService'));
            yield 12 => ($container->privates['App\\Module\\History\\Statistics\\Subpanels\\SubPanelHistoryLastDate'] ?? $container->load('getSubPanelHistoryLastDateService'));
            yield 13 => ($container->privates['App\\Module\\Invoices\\Statistics\\Subpanels\\SubPanelInvoicesTotal'] ?? $container->load('getSubPanelInvoicesTotalService'));
            yield 14 => ($container->privates['App\\Module\\Leads\\Statistics\\LeadDaysOpen'] ?? $container->load('getLeadDaysOpenService'));
            yield 15 => ($container->privates['App\\Module\\Leads\\Statistics\\Series\\LeadsByStatusCount'] ?? $container->load('getLeadsByStatusCountService'));
            yield 16 => ($container->privates['App\\Module\\Opportunities\\Statistics\\OpportunitySalesStageTimeSpan'] ?? $container->load('getOpportunitySalesStageTimeSpanService'));
            yield 17 => ($container->privates['App\\Module\\Opportunities\\Statistics\\OpportunitySizeAnalysis'] ?? $container->load('getOpportunitySizeAnalysisService'));
            yield 18 => ($container->privates['App\\Module\\Opportunities\\Statistics\\Series\\OpportunitiesBySalesStagePipeline'] ?? $container->load('getOpportunitiesBySalesStagePipelineService'));
            yield 19 => ($container->privates['App\\Module\\Opportunities\\Statistics\\Series\\PastYearsClosedOpportunityAmounts'] ?? $container->load('getPastYearsClosedOpportunityAmountsService'));
            yield 20 => ($container->privates['App\\Module\\Opportunities\\Statistics\\Subpanels\\SubpanelOpportunitiesTotal'] ?? $container->load('getSubpanelOpportunitiesTotalService'));
            yield 21 => ($container->privates['App\\Module\\Opportunities\\Statistics\\WonOpportunityAmountByYear'] ?? $container->load('getWonOpportunityAmountByYearService'));
            yield 22 => ($container->privates['App\\Module\\Quotes\\Statistics\\Subpanels\\SubPanelQuotesTotal'] ?? $container->load('getSubPanelQuotesTotalService'));
            yield 23 => ($container->privates['App\\Module\\Tasks\\Statistics\\DaysUntilDueTask'] ?? $container->load('getDaysUntilDueTaskService'));
            yield 24 => ($container->privates['App\\Module\\Tasks\\Statistics\\Subpanels\\SubPanelTasksHistoryCount'] ?? $container->load('getSubPanelTasksHistoryCountService'));
            yield 25 => ($container->privates['App\\Module\\Users\\Statistics\\AssignedUserOpportunitiesCount'] ?? $container->load('getAssignedUserOpportunitiesCountService'));
        }, 26));
    }
}
