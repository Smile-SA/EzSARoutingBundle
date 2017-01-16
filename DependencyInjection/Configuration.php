<?php

namespace Smile\EzSARoutingBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Configuration\SiteAccessAware\Configuration as SiteAccessConfiguration;

class Configuration extends SiteAccessConfiguration
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('smile_ez_sa_routing');

        $systemNode = $this->generateScopeBaseNode($rootNode);
        $systemNode
            ->scalarNode('fallback')->isRequired()->end()
            ->end();

        return $treeBuilder;
    }
}
