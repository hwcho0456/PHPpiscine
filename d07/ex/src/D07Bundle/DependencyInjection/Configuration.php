<?php
// src/D07Bundle/DependencyInjection/Configuration.php
namespace D07Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('d07');

        $rootNode
            ->children()
                ->integerNode('number')->end()
                ->booleanNode('enable')->defaultValue(true)->end()
            ->end()
        ;

        return $treeBuilder;
    }
}