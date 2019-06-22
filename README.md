## Symfony(1.4) Application with Moesif Integrated

Official SDK for PHP Symfony(1.4) to automatically capture incoming HTTP traffic.

Moesif is an API analyatics platform. [moesif-symfony1.4](https://github.com/Moesif/moesif-laravel)
is a middleware that makes integration with Moesif easy for Symfony1.4 based applications.

This is an example of Symfony1.4 application with Moesif integrated.

## How to run this example

1. Install the dependencies `composer update` or `composer install`.
1. Update this files `config/filters.yml` and `apps/frontend/config/filters.yml` with your Moesif Application Id .
2. Change to `web` directory.
3. Run `php -S localhost:8888` to start the server.
4. Hit this route - `http://localhost:8888/index.php` and you would see the event is captured in Moesif.

## How to disable the filter
Set the enabled param to false in `apps/frontend/config/filters.yml` file if you would like to disable the filter.