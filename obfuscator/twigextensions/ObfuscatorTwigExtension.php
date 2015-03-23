<?php

namespace Craft;

use Twig_Extension;  
use Twig_Filter_Method;

require_once(CRAFT_PLUGINS_PATH . 'obfuscator/lib/StandalonePHPEnkoder.php');

class ObfuscatorTwigExtension extends \Twig_Extension
{
    protected $enkoder;
    
    public function __construct()
    {
        $this->enkoder = new \StandalonePHPEnkoder();
    }
    
    public function getName()
    {
        return Craft::t('Obfuscator');
    }
    
    public function getFilters()
    {
        return array(
            'enkode'                    => new \Twig_Filter_Method($this, 'enkodeFilter'),
            'enkode_emails'             => new \Twig_Filter_Method($this, 'enkodeEmailsFilter'),
            'enkode_mailtos'            => new \Twig_Filter_Method($this, 'enkodeMailtosFilter'),
            'enkode_plaintext_emails'   => new \Twig_Filter_Method($this, 'enkodePlaintextEmailsFilter'),
        );
    }
    
    public function enkodeFilter($str, $message = 'JavaScript is required to reveal this message.')
    {
        $charset = craft()->templates->getTwig()->getCharset();
        
        $str = $this->enkoder->enkode($str, $message);
        
        return new \Twig_Markup($str, $charset);
    }
    
    public function enkodeEmailsFilter($str)
    {
        $charset = craft()->templates->getTwig()->getCharset();
        
        $str = $this->enkoder->enkodeAllEmails($str);
        
        return new \Twig_Markup($str, $charset);
    }
    
    public function enkodeMailtosFilter($str)
    {
        $charset = craft()->templates->getTwig()->getCharset();
        
        $str = $this->enkoder->enkodeMailtos($str);
        
        return new \Twig_Markup($str, $charset);
    }
    
    public function enkodePlaintextEmailsFilter($str)
    {
        $charset = craft()->templates->getTwig()->getCharset();
        
        $str = $this->enkoder->enkodePlaintextEmails($str);
        
        return new \Twig_Markup($str, $charset);
    }
}
