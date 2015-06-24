## When 2 plugins has same dependencies

Outcome when modifying constructor of license manager included in Dummy Plugin One:

```php
string 'Hi from "/vagrant/www/public/wp-content/plugins/dummy-plugin-one/vendor/yoast/license-manager"' (length=94)
string 'Hi from "/vagrant/www/public/wp-content/plugins/dummy-plugin-one/vendor/yoast/license-manager"' (length=94)
```

Meaning that the second time the license manager is included, by Dummy Plugin Two, it is ignored by Composer.

## Test this yourself

Clone repository and run `composer install` in both plugin directories. Modify constructor in `vendor/yoast/license-manager/class-plugin-license-manager.php` to include:

```php
var_dump('Hello from ' . __DIR__);
```
