# php-breadcrumbs
PHP breadcrumbs rendering class

##Installation

The package can be installed via Composer by adding to the ```composer.json``` require block.
```javascript
{
    "require": {
        "mkomorowski/php-breadcrumbs": "dev-master"
    }
}
```

Then update application packages by running the command:
```sh
php composer.phar install
```

##Usage
```php
$breadCrumbsRender = new mKomorowski\Breadcrumbs\Render;
```

Rendering breadcrumbs can be achieved by passing custom URI path.
```php
echo $breadCrumbsRender->build('/library/data')
```
Passsing `php null` will render `php $_SERVER['REQUEST_URI']` parameter
```php
echo $breadCrumbsRender->build()
```