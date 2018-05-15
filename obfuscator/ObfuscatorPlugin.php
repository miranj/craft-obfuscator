<?php
namespace Craft;

class ObfuscatorPlugin extends BasePlugin
{
    function init()
    {
        require_once __DIR__.'/vendor/autoload.php';
    }

    function getName()
    {
        return Craft::t('Obfuscator');
    }

    function getVersion()
    {
        return '0.2';
    }

    function getDeveloper()
    {
        return 'Miranj';
    }

    function getDeveloperUrl()
    {
        return 'http://miranj.in';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/miranj/craft-obfuscator/master/releases.json';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.obfuscator.twigextensions.ObfuscatorTwigExtension');
        return new ObfuscatorTwigExtension();
    }
}
