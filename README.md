nnssn/str-rename
====
Converts the camel case and snake case each other.

## Requirement

PHP 5.4.0

## Install

```
composer require nnssn/str-rename
```

## Usage

```
require 'vendor/autoload.php';  
  
use Nnssn\Str\Rename;  
  
echo Rename::snake('camelCase');         // camel_case  
echo Rename::snake('PascalCase');        // pascal_case  
echo Rename::snake('twitter-bootstrap'); // twitter_bootstrap  
  
echo Rename::camel('snake_case');        // snakeCase  
echo Rename::camel('PascalCase');        // pascalCase  
echo Rename::camel('twitter-bootstrap'); // twitterBootstrap  
```

## Methods

```
Rename::snake  
Rename::constant  
Rename::hyphen  
Rename::camel  
Rename::pascal  
Rename::unite  
Rename::uniteUp  
```

## Licence

[MIT](http://opensource.org/licenses/mit-license.php)

