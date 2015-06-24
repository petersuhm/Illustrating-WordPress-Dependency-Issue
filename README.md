Outcome when modifying constructor of license manager included in Dummy Plugin One:

```php
string 'Hi from "/vagrant/www/public/wp-content/plugins/dummy-plugin-one/vendor/yoast/license-manager"' (length=94)
string 'Hi from "/vagrant/www/public/wp-content/plugins/dummy-plugin-one/vendor/yoast/license-manager"' (length=94)
```

Meaning that the second time the license manager is included, by Dummy Plugin Two, it is ignored by Composer.
