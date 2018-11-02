Obfuscator
==========

A [Craft CMS][craft] plugin that adds a [Twig][twig] filter to obfuscate emails or any other content using [Hivelogic Enkoder][he].

[craft]:http://buildwithcraft.com/
[twig]:http://twig.sensiolabs.org/
[he]:http://hivelogic.com/enkoder/

This plugin uses [Standalone PHPEnkoder][sp].

[sp]: https://github.com/jnicol/standalone-phpenkoder


Requirements
------------
This plugin requires Craft CMS 3.0.0 or later. The Craft 2 version is availabe in [the `v0` branch](https://github.com/miranj/craft-obfuscator/tree/v0).



Installation
------------

You can install this plugin from the [Plugin Store][ps] or with Composer.

[ps]:https://plugins.craftcms.com/

#### From the Plugin Store
Go to the Plugin Store in your project’s Control Panel and search for “Obfuscator”.
Then click on the “Install” button in its modal window.

#### Using Composer
Open your terminal and run the following commands:

    # go to the project directory
    cd /path/to/project
    
    # tell composer to use the plugin
    composer require miranj/craft-obfuscator
    
    # tell Craft to install the plugin
    ./craft install/plugin obfuscator
    


Usage
-----
```
{{ 'Reach us on me@example.com or <a href="mailto:anotherme@example.com">here</a>.' | enkode_emails }}
```

```
{{ '<a href="mailto:me@example.com">Contact Us</a>' | enkode_mailtos }}
```

```
{{ 'Contact us at me@example.com.' | enkode_plaintext_emails }}
```

```
{{ 'I don’t want spam bots to read this.' | enkode }}
```

```
{{ 'If you don’t have JavaScript, you’ll see a helpful message.' | enkode('JavaScript is required to view this message.') }}
```


---

Brought to you by [Miranj](https://miranj.in/)
