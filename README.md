Obfuscator
==========

A [Craft CMS][craft] plugin that adds a [Twig][twig] filter to obfuscate emails or any other content using [Hivelogic Enkoder][he].

[craft]:http://buildwithcraft.com/
[twig]:http://twig.sensiolabs.org/
[he]:http://hivelogic.com/enkoder/


Dependency
----------

This plugin requires [Standalone PHPEnkoder][sp].

[sp]: https://github.com/jnicol/standalone-phpenkoder


Installation
------------

1. Clone repository using `git clone --recursive https://github.com/miranj/craft-obfuscator` (or download and unzip Package.zip from [latest release][latest].  
2. Place the `obfuscator` folder inside your `craft/plugins/` folder.
3. Go to Settings > Plugins inside your Control Panel and install **Obfuscator**.

[latest]: https://github.com/miranj/craft-obfuscator/releases/latest


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
