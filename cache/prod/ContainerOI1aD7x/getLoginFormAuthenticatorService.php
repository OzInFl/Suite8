<?php

namespace ContainerOI1aD7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginFormAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\LoginFormAuthenticator' shared autowired service.
     *
     * @return \App\Security\LoginFormAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/security-guard/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/security-guard/Authenticator/AbstractFormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/security-guard/PasswordAuthenticatedInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Security/LoginFormAuthenticator.php';

        return $container->privates['App\\Security\\LoginFormAuthenticator'] = new \App\Security\LoginFormAuthenticator(($container->privates['App\\Authentication\\LegacyHandler\\Authentication'] ?? $container->getAuthenticationService()), ($container->services['router'] ?? $container->getRouterService()), ($container->services['.container.private.security.csrf.token_manager'] ?? $container->get_Container_Private_Security_Csrf_TokenManagerService()), ($container->services['session'] ?? $container->getSessionService()), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
