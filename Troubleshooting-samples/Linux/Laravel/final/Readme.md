# To run this app locally
- Run `php composer.phar install`
- Generate a key with `php artisan key:generate` this will be saved in .env

# To deploy to Azure App Service Linux
- Add a new app setting called APP_KEY=<output_of_php_artisan_key:generate>
- You can add `APP_DEBUG=true` to enable extra logging if you are getting http 500 server error.
- This sample contains already a `.htaccess` with public folder redirection.