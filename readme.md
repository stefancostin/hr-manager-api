[Laravel Installation Guidelines](https://laravel.com/docs/5.8/installation)

# API based on <a href="https://laravel.com/">Laravel</a>
<img src="https://i.imgur.com/uVYHwPL.jpg"/>

## Getting Started

The HR Manager API is built with Laravel. To run the application:
- git clone https://github.com/stefancostin/hr-manager-api.git
- cd hr-manager-api
- composer install
- php artisan serve

To populate database with seeders:
- php artisan migrate
- php artisan db:seed

For more details on running this application please visit the official Laravel guidelines on [installation](https://laravel.com/docs/5.8/installation) and [configuration](https://laravel.com/docs/5.8/configuration).

## Client Application

To work with the frontend application, you can clone it from the following [link](https://github.com/stefancostin/hr-manager-client).

The 'api.resource.ts' file inside the client app configures the path for your back-end server calls. Currently it is set to the default path of: http://127.0.0.1:8000. If your API is running on a different ip or port, you can configure the frontend application to make calls to your own path inside the 'src/app/pages/shared/api.resource.ts' file.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
