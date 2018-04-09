# Semaine intensive 5

blabla wEbGL blablabla

## Installation

~~~
make install
~~~

Modify app/db.php

~~~php
$db = [
    'host' => '127.0.0.1',
    'dbname' => 'si5',
    'user' => 'root',
    'password' => 'secret',
    'charset' => 'utf8'
];
~~~

Lancer le serveur de dev

~~~
make start
~~~

## Assets

Build assets

~~~
make build
~~~

Watch assets

~~~
make watch
~~~