# Database Connection Library

This library provides one method to access the MySQLi instance, this means you can keep the instance open throughout the script execution, and access it within multiple classes.

## Installation

Add the following to your `composer.json` require object:

```json
"joelvardy/database": "1.1"
```

## Usage

### Configuration

Configure the library as shown below:

```php
Joelvardy\Database::configure('127.0.0.1', 3306, 'username', 'password', 'db_name');
```

By default the host is defined as `127.0.0.1` and the port as `3306`.

### Get MySQLi Instance

```php
// Query the database
$result = Joelvardy\Database::instance()->query("select * from table");
```

This library was written by [Joel Vardy][joelvardy].

  [joelvardy]: http://joelvardy.com/
