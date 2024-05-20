# start
```bash
cd insertionSort;
php -e index.php;
php -S localhost:8000;
```

# tests
```bash
cd tests;
vendor/bin/phpunit tests/SelectionSortTest.php --color=always
vendor/bin/phpunit tests/SelectionSortTest.php --color=always --filter testSort
```