Для использования запустите

```
composer install
```

Пример использования в директории src в файле Task.php

```
$task = new Task();
var_dump($task->reverseWords("Ма-ма мыл-А Раму-Панараму"));
```

Для тестов запустите в корне проекта

```
vendor/bin/phpunit
```

