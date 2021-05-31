<?php

namespace ContainerUsCW8rD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_CacheClearerService extends phpDocumentor_KernelProdContainer
{
    /*
     * Gets the public '.container.private.cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).''.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'CacheClearerInterface.php';
        include_once \dirname(__DIR__, 6).''.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'ChainCacheClearer.php';

        return $container->services['.container.private.cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0));
    }
}
