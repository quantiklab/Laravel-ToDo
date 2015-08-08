# Laravel ToDo App

A simple todo app created with laravel with multiple user account support.



## Installation

Clone the repository-
```
https://github.com/quantiklab/Todo-App.git
```

Then cd into the folder with this command-
```
cd laravel-todo
```

Then do a composer update
```
composer update
```

Then create a environment file using this command-
```
cp .env.exapmle .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `todos` and then do a database migration using this command-
```
php artisan migrate
```

Then change permission of storage folder using thins command-
```
(sudo) chmod 777 -R storage
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.

## Ask a question?

If you have any query please contact at quantiklab@gmail.com


