# Caching Library

Written by [Joel Vardy][joelvardy], this library provides a static wrapper around the PHP memcached class.

## Installation

Add the following to your `composer.json` require object:

```json
"joelvardy/cache": "dev-master"
```

## Usage

### Configuration

Configure the library as shown below:

```php
Joelvardy\Cache::configure('127.0.0.1', 11211, 'prefix_');
```

By default the host is defined as `127.0.0.1` and the port as `11211`.

### Example

Below is an example which assumes the code is in a fictitious gallery class:

```php
// If the photos have already been cached, return them
if (Joelvardy\Cache::fetch('photos')) {
	return Joelvardy\Cache::fetch('photos');
}

// If not, read them from the database
$photos = $some_class->read_photos();

// Cache the photos for 5 minutes
Joelvardy\Cache::store('photos', $photos, 300);

return $photos;
```

  [joelvardy]: https://joelvardy.com/
