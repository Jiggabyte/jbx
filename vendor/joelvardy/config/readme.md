# Configuration Library

Define and retrieve configuration values easily with this simple library written by [Joel Vardy][joelvardy].

## Installation

Add the following to your `composer.json` require object:

```json
"joelvardy/config": "dev-master"
```

## Usage

Here is a very simple example:

```php
// Define value
Joelvardy\Config::value('site-name', 'My Website');

// Retrieve value
echo Joelvardy\Config::value('site-name');
```

However you can store many datatypes using the config library, in the example below I am storing some database details:

```php
// Define values
Joelvardy\Config::value('database', (object) array(
	'host' => 'localhost',
	'username' => 'joelvardy',
	'password' => 'CHANGEME'
));

// Use these values to connect to the database
echo Joelvardy\Config::value('database')->host;
echo Joelvardy\Config::value('database')->username;
echo Joelvardy\Config::value('database')->password;
```

Looking at the code which powers my [personal website][file-based-definition] you can see how I have iterated through a directory of config files which each return an object and automatically add these to the config library.

  [joelvardy]: http://joelvardy.com/
  [file-based-definition]: https://github.com/joelvardy/joelvardy.com/blob/master/initialisation.php#L23-L26