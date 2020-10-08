## Getting Started with Laravel 8 Workshop

This is the basecode used in the workshop. To use this repository you can use the following instructions:

### Requirements

-   Git
-   Composer
-   PHP 7.3 or greater

### Clone the repository

From the location you want to install the application run:

`git clone https://github.com/wizelineacademy/laravel-101`

### Set up the environment file

```
cd laravel-101
cp .env.example .env
```

Access the .env file and fill in the information needed

### Create the database file (SQLite)

```
touch database/database.sqlite
```

### Install PHP and NPM dependencies

```
composer install
npm install
npm run dev

```

### Run the migrations and build the database tables

```
php artisan migrate
```

### Run the server

`php artisan serve`

### Access the website

In your preferred browser enter the address `http://127.0.0.1:8000`. This address should be the one appearing in your CLI when first starting the website.

### Aknowledgments

Thanks to the Wizeline Academy team for the constant support and to the PHP Jalisco group for the communication efforts.
