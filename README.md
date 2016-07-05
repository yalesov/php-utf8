# Yalesov\Utf8

[![Build Status](https://travis-ci.org/yalesov/php-utf8.svg)](https://travis-ci.org/yalesov/php-utf8)

A collection of utf8-related functions.

# Installation

[Composer](http://getcomposer.org/):

```json
{
  "require": {
    "yalesov/utf8": "2.*"
  }
}
```

# Usage

Utf-8 version of [chr](http://php.net/manual/en/function.chr.php):

```php
use Yalesov\Utf8\Utf8;
$char = Utf8::uchr($num);
```

Utf-8 version of [ord](http://php.net/manual/en/function.ord.php):

```php
use Yalesov\Utf8\Utf8;
$num = Utf8::uord($char);
```
