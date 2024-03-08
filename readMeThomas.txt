composer create-project laravel/laravel nameoftheproject

MVC
Model  --  table --- is singular and starts with Capital  
     eg. if i have a table users, then the model will be User
To create a model we use the command
    php artisan make:model ModelName   eg php artisan make:model User


View  --- what the user see
Controller -- interacts between the view and the model

To tell laravel the database name and credentials we enter the details in the .env file

TO create/update the table from laravel we will create a migration file
 command is....   php artisan make:migration nameofthefile
Normally, when creating a model we also generate the mirgration file together
     command.... php artisan make:model Customer -m

To migrate the table from laravel we use the command
php artisan migrate
