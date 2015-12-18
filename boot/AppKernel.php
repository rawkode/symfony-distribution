<?php

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

/*
 */
class AppKernel extends Kernel
{
    /*
     */
    public function registerBundles()
    {
        $bundles = array(
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
        );

        if (in_array($this->getEnvironment(), array('development', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    /**
     * @param LoaderInterface $loader
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/../etc/'.$this->environment.'/configuration.xml');
    }

    /*
     */
    public function getCacheDir()
    {
        return __DIR__.'/../var/cache/application/'.$this->environment;
    }

    /*
     */
    public function getLogDir()
    {
        return __DIR__.'/../var/log/application/'.$this->environment;
    }
}
