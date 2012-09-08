# Heartsentwined\Utf8

[![Build Status](https://secure.travis-ci.org/heartsentwined/utf8.png)](http://travis-ci.org/heartsentwined/utf8)

A collection of utf8-related functions.

# Installation

[Composer](http://getcomposer.org/):

```json
{
    "require": {
        "heartsentwined/utf8": "1.*"
    }
}
```

# Usage

Utf-8 version of [chr](http://php.net/manual/en/function.chr.php):

```php
use Heartsentwined\Utf8\Utf8;
$char = Utf8::uchr($num);
```

Utf-8 version of [ord](http://php.net/manual/en/function.ord.php):

```php
use Heartsentwined\Utf8\Utf8;
$num = Utf8::uord($char);
```
