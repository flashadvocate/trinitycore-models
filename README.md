# TrinityCore Models

Eloquent Models of TrinityCore Database



## TODO
- All relationships between models !!! 

You can work with me. Make pull request ;)

## Configuration


- Add database connection in config/database.php

```
'connections' => [

        [...]

        'characters' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST_CHARACTERS', 'localhost'),
            'database'  => env('DB_DATABASE_CHARACTERS', 'forge'),
            'username'  => env('DB_USERNAME_CHARACTERS', 'forge'),
            'password'  => env('DB_PASSWORD_CHARACTERS', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'world' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST_WORLD', 'localhost'),
            'database'  => env('DB_DATABASE_WORLD', 'forge'),
            'username'  => env('DB_USERNAME_WORLD', 'forge'),
            'password'  => env('DB_PASSWORD_WORLD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'auth' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST_AUTH', 'localhost'),
            'database'  => env('DB_DATABASE_AUTH', 'forge'),
            'username'  => env('DB_USERNAME_AUTH', 'forge'),
            'password'  => env('DB_PASSWORD_AUTH', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ]

        [...]

    ],
```


- Add this to .env :
```
DB_HOST_WORLD=localhost
DB_DATABASE_WORLD=world
DB_USERNAME_WORLD=root
DB_PASSWORD_WORLD=root

DB_HOST_CHARACTERS=localhost
DB_DATABASE_CHARACTERS=characters
DB_USERNAME_CHARACTERS=root
DB_PASSWORD_CHARACTERS=root

DB_HOST_AUTH=localhost
DB_DATABASE_AUTH=auth
DB_USERNAME_AUTH=root
DB_PASSWORD_AUTH=root