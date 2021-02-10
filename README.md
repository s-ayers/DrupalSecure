DrupalSecure Code Sniffer (secure_cs) is a secure coding validation tool for Drupal
built on PHP_CodeSniffer and modeled after work on DrupalCS in the Coder module.

Installation
------------

Requirements:
  - PEAR
  - PHPCS

- Install PEAR  ( http://pear.php.net/manual/en/installation.php )
- Install PHPCS ( http://pear.php.net/package/PHP_CodeSniffer )
- Sym-link the secure_cs directory into the standards folder for PHP_CodeSniffer:

$> sudo ln -sv /path/to/secure_cs/DrupalSecure $(pear config-get php_dir)/PHP/CodeSniffer/Standards

Optional (but recommended), install drush command:

- Symlink the drush command to your ~/.drush directory:

$> ln -s /path/to/secure_cs/secure_cs.drush.inc ~/.drush/secure_cs.drush.inc

Usage
-----

Invoke DrupalSecure standard using the phpcs command-line tool:

$> phpcs --standard=DrupalSecure <file to scan>

or, invoke using provided drush command for better output:

$> drush secure_cs <file to scan>

Example usage
-------------

Invoking DrupalSecure using provided drush command:

"
bjeavons@Ben-mbp $ drush secure_cs BadCallback.php
File: /Users/bjeavons/dev/modules/secure_cs/DrupalSecure/Tests/BadCallback.php
 Message                                                                              Severity  Line  Column  Type
 Menu callback argument $arg returned from bar_callback                               error     20    25      XSS
 Menu callback argument $arg of function foo_callback output with drupal_set_message  error     24    3       XSS
 Menu callback $arg of function fish_callback is printed                              error     38    9       XSS

Found 3 issues [error]
"

Writing Sniffs (tests)
----------------------

To contribute additional sniffs see: http://drupal.org/node/1921930

Thanks
------

Thanks to PHP_CodeSniffer maintainer Greg Sherwood for the framework, DrupalCS creator Eric Duran and Coder module maintainer Doug Green for their pioneering Drupal work.