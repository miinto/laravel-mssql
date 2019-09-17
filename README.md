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
    
For laravel >=5.8, it's  define:
    
    //....
    use Miinto\Database\MsSqlConnection;
    //....
    public function register()
    {    
        $this->app->bind('db.connector.mssql', \Illuminate\Database\Connectors\SqlServerConnector::class);
        Connection::resolverFor('mssql',function ($connection, $database, $prefix, $config) {
            return new MsSqlConnection($connection, $database, $prefix, $config);
        });
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
    
For laravel >=5.8, it's  define:
    
    'mssql' => [
                'driver'   => 'mssql',
                'host'     => env('DB_HOST_SQLSVR_MSSQL', 'localhost'),
                'database' => env('DB_DATABASE_SQLSVR', 'forge'),
                'username' => env('DB_USERNAME_SQLSVR', 'forge'),
                'password' => env('DB_PASSWORD_SQLSVR', ''),
                'charset'  => 'utf8',
                'prefix'   => '',
                'odbc'=>true,
                'odbc_datasource_name'=>dsn
            ],

dsn: is the connection string to the sql server exmaple:

    'odbc_datasource_name'=>'mayconect'
    
for what in `PDO("odbc:mayconect", 'user', 'password');`

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
