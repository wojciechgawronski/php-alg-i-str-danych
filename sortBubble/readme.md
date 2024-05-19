# start
```bash
cd sortBubble;
php -e index.php;
php -S localhost:8000;
```

# tests
```bash
cd tests;
vendor/bin/phpunit tests/BubbleSortTest.php --color=always
vendor/bin/phpunit tests/BubbleSortTest.php --color=always --filter testSort
```