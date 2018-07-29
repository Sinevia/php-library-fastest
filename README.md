# PHP Library Fastest

Fastest router

## How it works ##
Simple and unassuming router. 
1. The router checks for an action parameter in the URL. If not found assumes "home".
2. Executes a PHP function for the requested action.
3. The action function has the same name as the requested action with the "_action" postfix.
   (action: home => function: home_action)
4. Dashes, spaces, and forward slashes are replaced with underscores 
   (action: auth/login => function: auth_login_action)

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


