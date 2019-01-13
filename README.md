# PHP Library Fastest

Fastest router

## How it works ##
Simple and unassuming router. 
1. The router checks for an action parameter in the URL. If not found assumes "home".

   index.php?a=home (this is default)
   index.php?a=register
   
2. Executes a PHP function for the requested action.
3. The action function has the same name as the requested action with the "_action" postfix.

   (action: home => function: home_action)
   (action: register => function: register_action)
   
4. Dashes, spaces, and forward slashes are replaced with underscores 

   (action: auth/login => function: auth_login_action)
   (action: auth-login => function: auth_login_action)

## Installation ##

1. Using composer (recommended)

```bash
composer require sinevia/php-library-fastest
```

2. Manually. Copy the fastest.php file and use the include_once function to include

## Usage ##

1. Add the following line to where the router will be working. It can be the main router of the app, or a standalone PHP webpage.

```php
// Add the actions
require_once('../actions/home_action.php');
require_once('../actions/login_action.php');

// Execute the router
\Sinevia::fastest();
```

Alternatively, output the result as string and execute yourself

```php
// Get the result as string and output
$result = \Sinevia::fastest(['output_as_string' => true]);
die($result);
```

2. Example functions
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


