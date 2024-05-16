# start
```bash
composer install;
vendor/bin/phpunit tests;
vendor/bin/phpcs --standard=PSR12 ./linkedList/
```

```bash
php-cs-fixer fix .
phpcs .
phpcbf .
```