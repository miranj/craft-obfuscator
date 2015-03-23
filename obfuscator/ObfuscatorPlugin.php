<?php
namespace Craft;

class ObfuscatorPlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Obfuscator');
    }

    function getVersion()
    {
        return '0.1';
    }

    function getDeveloper()
    {
        return 'Miranj';
    }

    function getDeveloperUrl()
    {
        return 'http://miranj.in';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.obfuscator.twigextensions.ObfuscatorTwigExtension');
        return new ObfuscatorTwigExtension();
    }
}
