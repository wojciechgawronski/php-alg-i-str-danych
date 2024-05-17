# start
```bash
cd stack;
php -e index.php;
php -S localhost:8000; 
```
# queue
- FIFO: First In Firts Out
- enqueue: zakolejkowanie
- dequeue: wykolejkowanie

# tests
```bash
vendor/bin/phpunit tests/StackArrayTest.php
vendor/bin/phpunit tests/StackArrayTest.php --filter testPop
```