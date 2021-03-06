<?php

namespace UnderDevCrew\Bundle\PlacesApiBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class UnderDevCrewPlacesApiExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');

        $container->getDefinition('underdevcrew.places_api.api_factory')->addMethodCall(
            'useAuthentication',
            ['PublicApiAccess', ['key' => '%google_places_api_key%']]
        );
    }
}
