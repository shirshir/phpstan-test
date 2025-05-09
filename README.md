


```bash
$ composer install                           # will install phpstan 2.1.11
$ vendor/bin/phpstan                         # no errors
$ composer req --dev phpstan/phpstan:2.1.14
$ vendor/bin/phpstan

#  [ERROR] Found 2 errors
#
#  ------ ----------------------------------------------------------------------------------------------------
#   Line   BarCollection.php
#  ------ ----------------------------------------------------------------------------------------------------
#   38     Method PhpstanTest\BarCollection::findByName() should return iterable<PhpstanTest\Bar> but returns
#          Psl\Collection\MutableMap<(int|string), mixed>.
#          🪪  return.type
#   39     Parameter #1 $fn of method Psl\Collection\MutableMap<(int|string),mixed>::filter() expects
#          Closure(mixed): bool, Closure(PhpstanTest\Bar): bool given.
#          🪪  argument.type
``` 
