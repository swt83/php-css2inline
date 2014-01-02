# Inline

A PHP library for preparing HTML emails by converting CSS to inline.

Uses Tijs Verkoyen's [CSS to Inline HTML Converter](https://github.com/tijsverkoyen/CssToInlineStyles).

## Install

Normal install via Composer.

## Usage

Really simple:

```php
$html = Travis\Inline::run($html);
```