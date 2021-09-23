# Creating Slim application

## Requirements

- [PHP 7.x](https://windows.php.net/download/)
- [Composer](https://getcomposer.org/download/)

## Installing Slim via Composer

1. Open a new terminal to run the following command: Change *example-app* to the name of your application.

```sh
composer create-project slim/slim-skeleton:dev-master example-app
```

2. CD into your newly created project and type **`code .`** to open the current directory in Visual Studio Code.

If you are running a fresh PHP installation, you can use this example [php.ini](https://chmaldstorage.blob.core.windows.net/phpwpbootcamp/php.ini) files for your PHP installation.

## Running Slim application

Slim is a micro framework; therefore, there is nothing further that needs to be configured for our test application.

To start and run Slim, use the following command:

```sh
php -S localhost:8080 -t public p
ublic/index.php
```

Navigate to `http://localhost:8080` to view application.

To stop your application, press `CTRL+C`.

## Working with Controllers

The Slim micro framework skeleton app comes pre-built with with a User Controller. Controllers in Slim are called `Actions`.

The User `Actions` can be located under `src\Application\Actions\User`.

There will be threes `Actions` defines. One `constructor` action and two specific action files.

Take a look at `ListUsersAction.php` and `ViewUserAction.php` to see what they are doing.

## Working with Routes

In order to tie `Actions` to a specific endpoint, you will need to define the `route` for these specific actions.

In the file `app\routes.php`, you will find all the routes defined for the Slim micro framework application.

Add a new route for `/hello` to send static data.

```php
$app->get('/hello', function (Request $request, Response $response) {
    $response->getBody()->write('Hello from our new Slim micro framework application.');
    return $response;
});
```

Start the application and navigate to our new route: `http://localhost:8080/hello`

## Expand your knowledge

Create two additional endpoints using the resources below to expand your knowledge:

[Slim - Request](https://www.slimframework.com/docs/v4/objects/request.html)

[Slim - Response](https://www.slimframework.com/docs/v4/objects/response.html)

[Slim - Routing](https://www.slimframework.com/docs/v4/objects/routing.html)
