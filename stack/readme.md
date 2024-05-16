# stack
- LIFO: Last In Firts Out
- push() 
- pop()
- isEmpty()

# start
```bash
cd stack;
php -e index.php;
php -S localhost:8000; 
```

# tests
```bash
vendor/bin/phpunit tests/StackArrayTest.php
vendor/bin/phpunit tests/StackArrayTest.php --filter testPop
```