# Creating Symfony application

## Requirements

- [PHP 7.x](https://windows.php.net/download/)
- [Composer](https://getcomposer.org/download/)
- [Symfony CLI](https://symfony.com/download)

## Installing Symfony

1. Open a new terminal to run the following command: Change *example-app* to the name of your application.

```sh
# for traditional web application
symfony new example-app --full

# for microservice
symfony new example-app
```

If you do not have the Symfony CLI or do not wish to use the CLI, you can use composer as well with the following commands.

```sh
# for traditional web application
composer create-project symfony/website-skeleton example-app

# for microservice
composer create-project symfony/skeleton example-app
```

2. CD into your newly created project and type **`code .`** to open the current directory in Visual Studio Code.

If you are running a fresh PHP installation, you can use this example [php.ini](https://chmaldstorage.blob.core.windows.net/phpwpbootcamp/php.ini) files for your PHP installation.

## Starting Symfony

In the default `.env` file, we will need to change our default `DATABASE_URL` from PostgreSQL to SQLite. Uncomment the SQLite definition and comment the PostgreSQL one.

```php
 DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
# DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
# DATABASE_URL="postgresql://db_user:db_password@127.0.0.1:5432/db_name?serverVersion=13&charset=utf8"

```

To start and run Symfony, use the following command:

```sh
# via Symfony CLI
symfony server:start

#via PHP
php -S localhost:8000 -t public
```

Navigate to `http://localhost:8000` to view application.

To stop your application, press `CTRL+C`. If it is still running you can also run `symfony server:stop`.

## Creating a new Controller

Symfony has built in tools to make creating a controller simple. Run the following command to create a new controller called `HelloWorldController`.

```sh
# Symfony CLI
symfony console make:controller HelloWorldController

# PHP
php bin/console make:controller HelloWorldController
```

This created two files:

`src\Controller\HelloWorldController.php`
`templates\hello_world\index.html.twig`

Symfony uses the Twig templating engine. Open the `index.html.twig` file and add the following:

```twig
{% extends 'base.html.twig' %}

{% block title %}Hello from the HelloWorldController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class="example-wrapper">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href="{{ '#' }}">src/Controller/HelloWorldController.php</a></code></li>
        <li>Your template at <code><a href="{{ '#' }}">templates/hello_world/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %}
```

## Creating a new Route

In order to access this new endpoint, you will need to define the route.

Open the `config\routes.yaml` file and add the new controller with the route `/hello`.

```yaml
#index:
#    path: /
#    controller: App\Controller\DefaultController::index

app_hello_world:
  path: /hello
  controller: App\Controller\HelloWorldController::index
```

Start the application and navigate to our new endpoint: `http://localhost:8000/hello`

## Expand your knowledge

Create two additional endpoints using the resources below to expand your knowledge:

[Symfony - Controllers](https://symfony.com/doc/current/controller.html)

[Symfony - Routing](https://symfony.com/doc/current/routing.html)

