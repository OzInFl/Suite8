<?php

namespace ContainerS8IQn4r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShivasVersioning_ManagerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'shivas_versioning.manager' shared service.
     *
     * @return \Shivas\VersioningBundle\Service\VersionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Service/VersionManagerInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Service/VersionManager.php';
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Writer/WriterInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Writer/VersionWriter.php';
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Formatter/FormatterInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Formatter/GitDescribeFormatter.php';
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Provider/ProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Provider/VersionProvider.php';
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Provider/GitRepositoryProvider.php';
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Provider/RevisionProvider.php';
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Provider/InitialVersionProvider.php';

        $container->privates['shivas_versioning.manager'] = $instance = new \Shivas\VersioningBundle\Service\VersionManager(($container->privates['shivas_versioning.cache.version'] ?? $container->load('getShivasVersioning_Cache_VersionService')), new \Shivas\VersioningBundle\Writer\VersionWriter(\dirname(__DIR__, 3)), new \Shivas\VersioningBundle\Formatter\GitDescribeFormatter());

        $instance->addProvider(new \Shivas\VersioningBundle\Provider\VersionProvider(\dirname(__DIR__, 3)), 'version', 100);
        $instance->addProvider(new \Shivas\VersioningBundle\Provider\GitRepositoryProvider(\dirname(__DIR__, 3)), 'git', -25);
        $instance->addProvider(new \Shivas\VersioningBundle\Provider\RevisionProvider(\dirname(__DIR__, 3)), 'revision', -50);
        $instance->addProvider(new \Shivas\VersioningBundle\Provider\InitialVersionProvider(), 'init', -75);

        return $instance;
    }
}
