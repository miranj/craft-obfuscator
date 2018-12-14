<p align="center"><img src="./src/icon.svg" width="100" height="100" alt="Obfuscator icon"></p>

<h1 align="center">Obfuscator</h1>

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

The following Twig snippet —

```twig
{% filter enkode_emails %}
    Reach us on me@example.com or
    <a href="mailto:anotherme@example.com">here</a>.
{% endfilter %}
```

will result in HTML where both the plain text email, and the `mailto:`
anchor tag are recognised as emails and obfuscated. It will result in something
like this (re-formatted for readability):

```html
Reach us on

<span id="enkoder_1_2033799978">email hidden; JavaScript is required</span>
<script id="script_enkoder_1_2033799978" type="text/javascript"> /* <!-- */
function hivelogic_enkoder_1_2033799978() { … } hivelogic_enkoder_1_2033799978();
/* --> */ </script>

or

<span id="enkoder_0_1540754146">email hidden; JavaScript is required</span>
<script id="script_enkoder_0_1540754146" type="text/javascript"> /* <!-- */
function hivelogic_enkoder_0_1540754146() { … } hivelogic_enkoder_0_1540754146();
/* --> */ </script>.
```

In addition to the `enkode_emails` filter, Obfuscator comes with a bunch of additional
filters for more fine grained targeting of what to obfuscate.

```twig
{{ 'Reach us on me@example.com or <a href="mailto:anotherme@example.com">here</a>.'|enkode_emails }}

{{ '<a href="mailto:me@example.com">Contact Us</a>'|enkode_mailtos }}

{{ 'Contact us at me@example.com.'|enkode_plaintext_emails }}

{{ 'I don’t want spam bots to read this.'|enkode }}

{{ 'If you don’t have JavaScript, you’ll see a helpful message.'|enkode('JavaScript is required to view this message.') }}
```

---

Brought to you by [Miranj](https://miranj.in/)
