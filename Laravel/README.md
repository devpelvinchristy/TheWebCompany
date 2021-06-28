Please Download the files and add the laravel folder to xampp/htdocs.
Clone repo

git clone https://github.com/devpelvinchristy/TheWebCompany.git
Install the composer dependencies

composer install
Save .env.example as .env and put your database credentials

Set application key
php artisan key:generate     

And Migrate with

php artisan migrate
