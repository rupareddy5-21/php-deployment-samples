# Creating Lumen application

## Requirements

- [PHP 7.x](https://windows.php.net/download/)
- [Composer](https://getcomposer.org/download/)

## Installing Lumen via Composer

1. Open a new terminal to run the following command: Change *example-app* to the name of your application.

```sh
composer create-project --prefer-dist laravel/lumen example-app
```

2. CD into your newly created project and type **`code .`** to open the current directory in Visual Studio Code.

If you are running a fresh PHP installation, you can use this example [php.ini](https://chmaldstorage.blob.core.windows.net/phpwpbootcamp/php.ini) files for your PHP installation.

## Settings up Lumen

Before you are able to continue further, you will need to ensure your `.env` file has a `APP_KEY` defined. Lumen will take any string for the `APP_KEY` value. Open the `.env` files and add any string for the `APP_KEY` value.

```conf
APP_KEY=thisismyrandomstring
```

To start and run Lumen, use the following command:

```sh
php -S localhost:8000 -t public
```

Navigate to `http://localhost:8080` to view application.

To stop your application, press `CTRL+C`.

## Creating a new Controller

Lumen is a micro framework of Laravel; therefore, file organization is very similar if not the same.

Create a new controller by creating a copy of the following example: `app\Http\Controllers\ExampleController.php`

```sh
# Linux
cp app/Http/Controllers/ExampleController.php app/Http/Controllers/HelloWorldController.php

# Windows
copy app\Http\Controllers\ExampleController.php app\Http\Controllers\HelloWorldController.php
```

Navigate to the new controller file and add the following:

```php
<?php

namespace App\Http\Controllers;

class HelloWorldController extends Controller
{
    public function __construct() {}

    public function index()
    {
        return "Hello World";
    }
}

```

## Creating a new Route

In order to access this new function, you will need to define a route.

Open the `routes\web.php` file and add the new controller with the route `/hello`.

Within the `$router->get()` function we are setting the `/hello` endpoint to point to `HelloWorldController` and the `index` function we defined.


```php
<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello', 'HelloWorldController@index');

```

Start the application and navigate to our new endpoint: `http://localhost:8080/hello`

## Expand your knowledge

Create two additional endpoints using the resources below to expand your knowledge:

[Lumen - Controllers](https://lumen.laravel.com/docs/8.x/controllers)

[Lumen - Routing](https://lumen.laravel.com/docs/8.x/routing)

[Lumen - Responses](https://lumen.laravel.com/docs/8.x/responses)
