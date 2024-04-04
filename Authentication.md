https://spatie.be/docs/laravel-permission/v6/installation-laravel

1. install the package via composer from your project folder
   composer require spatie/laravel-permission

2. Optional: The service provider will automatically get registered. Or you may manually add the service provider in your config/app.php file:
   'providers' => [
   // ...
   Spatie\Permission\PermissionServiceProvider::class,
   ];

3. you should publish the migration and the config/permission.php config file with:
   php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
   4.Clear your config cache.
   php artisan cache:clear

4. Run the migrations:
   php artisan migrate
5. in user model inside App\Models\User.php
   Add the necessary trait to your User model:
   use Spatie\Permission\Traits\HasRoles;
   class User extends Authenticatable
   {
   use HasApiTokens, HasFactory, Notifiable;
   use HasRoles;
   .....
   }
   till here installation and setup complete

Now how to use it....
follow steps from basic usage from the link below
https://spatie.be/docs/laravel-permission/v6/basic-usage/basic-usage

To directly create roles and permission
https://spatie.be/docs/laravel-permission/v6/basic-usage/artisan

To add the middleware
In Laravel 9 and 10 you can add them in app/Http/Kernel.php:
protected $middlewareAliases = [
// ...
'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
];
