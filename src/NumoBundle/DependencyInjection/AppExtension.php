<?php

// --- src/NumoBundle/DependencyInjection/AppExtension.php ---

namespace NumoBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;
use Sensio\Bundle\FrameworkExtraBundle\DependencyInjection\Configuration;

Class AppExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__dIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}