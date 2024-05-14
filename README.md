https://github.com/gnongkynrih/eshop

razorpay
https://razorpay.com/docs/payments/server-integration/php/install/#prerequisites
to install razor pay
composer require razorpay/razorpay:2.\*

Add Below Details For Trial :

Visa Card No : 4111111111111111

Mobile No : 1231231231

exipry shoud be future date
cvv can be anything
OTP No : anything
razorpay_payment_id

mailhog --- to test email
https://github.com/mailhog/MailHog/tree/master
https://sourceforge.net/projects/mailhog.mirror/

configure mailhog in laravel in the .env file
MAIL_MAILER=smtp
MAIL_HOST=localhost
MAIL_PORT=1025

To create mailable class
php artisan make:mail RegistrationMail
it will create a file RegistrationMail.php in app/mail folder

run mail hog... to check email type
http://localhost:8025/

search for the project eshop

pdf
composer require barryvdh/laravel-dompdf
reference... https://www.positronx.io/how-to-generate-pdf-in-laravel-with-dompdf/#tc_10431_02

AFTER DOWNLOADING THE CODE

run the command from your project folder
composer install

create the database as per the .env file
migrate the tables using the command
php artisan migrate
php artisan serve // to run the server
npm run dev --- to enable hot restart

using bootstrap
composer require laravel/ui --dev
php artisan ui bootstrap --auth
npm install

to run vite: npm run dev

jwt authentication
https://jwt-auth.readthedocs.io/en/develop/
https://dev.to/wenlopes/laravel-and-jwt-authentication-with-custom-model-4m3n

github.com/gnongkynrih
restapi

localhost:8000 //default port is 8000
create database dbname
dbeaver
xampp php 8
composer
Important
To create a symbolic link between public and storage folder use the command
php artisan storage:link

composer create-project laravel/laravel projectname

php artisan serve //to start the server

php artisan migrate

table name is always plural and starts with small letter
model name is singular and starts with capital letter

php artisan make:model Religion -m //create model and migration file
php artisan make:controller NameOfTheController

php artisan make:request CreateReligionRequest

php artisan make:resource
Assignment:
todo app
table-- tasks (id,taskname,is_completed)

the default pk is always id
and the default foreign key is tablename_id
eg. admission_users table pk is id

in the applicants table to link with admission users table the fk column will be admission_user_id

php artisan make:migration add_column_a
ddress_proof_to_table_applicants --table=applicants

to add new columns to existing table
php artisan make:migration nameofthemigration --table=tablename
eg. php artisan make:migration add_column_user_type_to_table_users --table=users
