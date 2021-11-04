## Getting Started

*(Assuming you've [installed Laravel](https://laravel.com/docs/5.5/installation))*

``` bash
composer install
```

Run the following command to generate your app key:

```
php artisan key:generate
```

Then start your server:

```
php artisan serve
```

# Directions of the main files: 
  - Database(MySQL) creation:  app/Console/Commands/MySQLDb.php
  - Create schema and migration: database/migrations/timestamp_companies_table.php
  - Create model: app/Company.php
  - Create Controller: app/Http/Controllers/ComapanyController.php
  - Views: resources/views
  - Routes: routes/web.php

Your Laravel starter project is now up and running! 