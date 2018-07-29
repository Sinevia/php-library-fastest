# PHP Library Fastest

Fastest router

## Background ##
Simple and unassuming router. The router checks for an action parameter in the URL and if found executes an function for the requested action. The action function has the same name as the requested action with the "_action" postfix.

## Installation ##

1. using composer (recommended)

```bash
composer require sinevia/php-library-fastest
```

Add the following to your composer file:

```json
   "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/sinevia/php-library-fastest.git"
        }
    ],
    "require": {
        "sinevia/php-library-fastest": "dev-master"
    },
```

## Usage ##


```php
\Sinevia::fastest();
```

```php
/**
 * The home function
 * route: ?a= or /
 */
function home_action {
    echo 'Home';
}

/**
 * The home function
 * route: ?a=login or /login
 */
function login_action {
    echo 'Login';
}

```


