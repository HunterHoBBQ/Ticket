1. This is normal ticket system with LARAVEL
2. Php artisan serve
3. using SQlite for no server setup needed (but you may need to edit .env file location for the SQLite database to work in your PC)
4. http://127.0.0.1:8000/ visit
5. Thank you

download from github.com

1. you need to unzip it
2. composer install (install back all the packages)
3. setup the SQlite database
   """ Delete all the Mysql setting in .env file
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ticket
   DB_USERNAME=root
   DB_PASSWORD=
   """

"""Add
DB_CONNECTION=sqlite

# Here you need to change DB_DATABASE= (to your saving location)

DB_DATABASE=C:\HH\Ticket\database\database.sqlite
"""

4. if you dont have .env and you can copy from the .env-example file.
5. in the terminal to setup the SQLite database with commend

```
Php artisan migrate
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=PublicTicketTransactionSeeder
php artisan db:seed --class=PrivateTicketTransactionSeeder

```

6. now you can php artisan serve
7. (optional) i have upload my testing SQlite too, if not then you need to login with dummy email after Seeder
