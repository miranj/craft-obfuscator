# Standalone PHPEnkoder

Uses PHP to encode email addresses so they can't be read by
spambots. Encodes plaintext email addresses and wraps them in a
mailto: link, and obfuscates any pre-existing mailto: links.

## Usage

    require_once('StandalonePHPEnkoder.php');
    $enkoder = new StandalonePHPEnkoder();
    $cleaned =  $enkoder->enkodeAllEmails($text);

If you only want to encode mailtos:

    $enkoder->enkodeMailtos($text);

If you only want to encode plaintext emails:

    $enkoder->enkodePlaintextEmails($text);

## Credits

Based on Michael Greenberg's PHPEnkoder plugin for Wordpress, 
which is itself a port of Hivelogic Enkoder. See the PHP
class for license details.

Other contributors: [Martin Adamko](https://github.com/attitude)