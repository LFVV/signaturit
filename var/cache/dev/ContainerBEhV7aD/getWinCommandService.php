<?php

namespace ContainerBEhV7aD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWinCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\WinCommand' shared autowired service.
     *
     * @return \App\Command\WinCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'WinCommand.php';

        $container->privates['App\\Command\\WinCommand'] = $instance = new \App\Command\WinCommand();

        $instance->setName('app:winner');

        return $instance;
    }
}
