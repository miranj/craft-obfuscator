<?php
/**
 * Obfuscator plugin for Craft CMS 3.x
 *
 * Adds a Twig filter to obfuscate emails using Hivelogic Enkoder.
 *
 * @link      https://miranj.in/
 * @copyright Copyright (c) 2018 Miranj
 */

namespace miranj\obfuscator\twigextensions;

use miranj\obfuscator\Obfuscator;

use Craft;
use Craft\web\twig\Environment;
use Twig_Extension;
use Twig_Filter;
use Twig_Markup;
use StandalonePHPEnkoder;


class ObfuscatorTwigExtension extends Twig_Extension
{
    protected $enkoder;
    
    public function __construct()
    {
        $this->enkoder = new StandalonePHPEnkoder();
    }
    
    public function getName()
    {
        return Craft::t('Obfuscator');
    }
    
    public function getFilters()
    {
        $needs_env = ['needs_environment' => true];
        return [
            new Twig_Filter('enkode', [$this, 'enkodeFilter'], $needs_env),
            new Twig_Filter('enkode_emails', [$this, 'enkodeEmailsFilter'], $needs_env),
            new Twig_Filter('enkode_mailtos', [$this, 'enkodeMailtosFilter'], $needs_env),
            new Twig_Filter('enkode_plaintext_emails', [$this, 'enkodePlaintextEmailsFilter'], $needs_env),
        ];
    }
    
    public function getTwigMarkup(Environment $env, $str)
    {
        $charset = $env->getCharset();
        return new Twig_Markup($str, $charset);
    }
    
    public function enkodeFilter(Environment $env, $str, $message = 'JavaScript is required to reveal this message.')
    {
        $str = $this->enkoder->enkode($str, $message);
        return $this->getTwigMarkup($env, $str);
    }
    
    public function enkodeEmailsFilter(Environment $env, $str)
    {
        $str = $this->enkoder->enkodeAllEmails($str);
        return $this->getTwigMarkup($env, $str);
    }
    
    public function enkodeMailtosFilter(Environment $env, $str)
    {
        $str = $this->enkoder->enkodeMailtos($str);
        return $this->getTwigMarkup($env, $str);
    }
    
    public function enkodePlaintextEmailsFilter(Environment $env, $str)
    {
        $str = $this->enkoder->enkodePlaintextEmails($str);
        return $this->getTwigMarkup($env, $str);
    }
}
