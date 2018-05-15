<?php

require_once('StandalonePHPEnkoder.php');
$enkoder = new StandalonePHPEnkoder();

// Enkode all plaintext and mailto: links in a string.
$html = '<p>Why not <a href="mailto:test@test.com?subject=Hello" tile="Email me">email me</a>. Your email will be sent to test@test.com. Here is another mailto, with an email address as the anchor text: <a href="mailto:test@test.com">test@test.com</a>. If you view source you shouldn\'t see any email addresses.</p>';
echo $enkoder->enkodeAllEmails($html);

?>