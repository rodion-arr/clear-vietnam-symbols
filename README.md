# clear-vietnam-symbols

![PHP Composer](https://github.com/rodion-arr/clear-vietnam-symbols/workflows/PHP%20Composer/badge.svg) [![codecov](https://codecov.io/gh/rodion-arr/clear-vietnam-symbols/branch/master/graph/badge.svg)](https://codecov.io/gh/rodion-arr/clear-vietnam-symbols) [![Latest Stable Version](https://poser.pugx.org/rodion-arr/clear-vietnam-symbols/v/stable)](https://packagist.org/packages/rodion-arr/clear-vietnam-symbols) [![License](https://poser.pugx.org/rodion-arr/clear-vietnam-symbols/license)](https://packagist.org/packages/rodion-arr/clear-vietnam-symbols)

This is a tiny function to convert Vietnamese symbols into ASCII

# Installation
`composer require rodion-arr/clear-vietnam-symbols`

# Usage
```php
require_once __DIR__.'/vendor/autoload.php'; // Autoload files using Composer

$sanitizer = new \RodionARR\VietnameseSymbolSanitizer();
$clearString = $sanitizer->run('ngân hàng vietinbank 79a hàm nghi'); // ngan hang vietinbank 79a ham nghi
```
