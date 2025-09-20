<h1 align="center">Emporium</h1>

This is a small ecommerce project built with Laravel. The main goal of this project is to demonstrate clean code quality, project structure, and best practices in Laravel development rather than building a fully-featured production-ready store. The frontend is intentionally minimal and outdated since the focus is on backend code quality.

## Documentation

Detailed documentation files are available in the [documents](/documents) folder.

## Installation

### 1. Clone the Repository
Clone this Git repository to the public root directory of your server, such as the **htdocs** / **public_html** folder.

### 2. Install PHP Dependencies
In the repository root directory (from CLI), run the command:

```console
composer install
```

### 3. Configure Environment
Make and change the **.env** file as you need. There is an example file called **.env.example**. Don't forget to set these for the production server:

```dotenv
APP_ENV=production
APP_DEBUG=false
```

Then run the command:

```console
php artisan key:generate
```

### 4. Set Up Database
Create a database on the server. Then run the command:

```console
php artisan migrate --seed
```

### 5. Create Storage Link
```console
php artisan storage:link
```

### 6. Install Node.js Dependencies
```console
npm install
```

### 7. Build Assets
```console
npm run production
```

### 8. Configure .htaccess
Make and change the **.htaccess** file as you need. There is an example file called **.htaccess.example**. There is an extra example for a specific production server called **.htaccess.production**.

### 9. Optimize Application (Optional but Recommended)
```console
php artisan optimize
```


## License

All rights reserved.