# laravel-mssql
Laravel extension which allows to use MS SQL specific column types like 'datetime2', 'real' and 'uniqueidentifier'.

## Installation
Add package to `composer.json`:

    "require": {
        "miinto/laravel-mssql": "dev-master"
    }

Install package using composer:

	composer update

Define `mssql` connection in `app/Providers/AppServiceProvider.php`:

    public function register()
    {
        $this->app->bind('db.connector.mssql', \Illuminate\Database\Connectors\SqlServerConnector::class);
        $this->app->bind('db.connection.mssql', \Miinto\Database\MsSqlConnection::class);
    }

Use `mssql` connection in `config/database.php`:

    'default' => env('DB_CONNECTION', 'mssql'),
    'connections' => [
        'mssql' => [
            'driver'   => 'mssql',
            'host'     => env('DB_HOST', 'localhost'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset'  => 'utf8',
            'prefix'   => '',
        ],
    ]

## Available column types

	$table->bit('name');
	$table->dateTime2('name');
	$table->real('name');
	$table->uniqueIdentifier('name');
	$table->xml('name');

These column types are also available, but they are a bad choice for storing
monetary values, so think twice before using them.

	$table->money('name');
	$table->smallMoney('name');
