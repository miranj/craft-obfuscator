<?php
/**
 * Obfuscator plugin for Craft CMS 3.x, 4.x
 *
 * Adds a Twig filter to obfuscate emails using Hivelogic Enkoder.
 *
 * @link      https://miranj.in/
 * @copyright Copyright (c) 2018 Miranj
 */

namespace miranj\obfuscator;

use miranj\obfuscator\twigextensions\ObfuscatorTwigExtension;

use Craft;
use craft\base\Plugin;


class Obfuscator extends Plugin
{
    /**
     * @var Obfuscator
     * Cache a reference of the plugin singleton
     */
    public static $plugin;
    
    public function init()
    {
        parent::init();
        self::$plugin = $this;
        
        Craft::$app->view->registerTwigExtension(new ObfuscatorTwigExtension());
        
        Craft::info(
            Craft::t(
                'obfuscator',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }
}
