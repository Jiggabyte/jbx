<?php

namespace Joelvardy;

/**
 * Cache library
 *
 * @link	https://github.com/joelvardy/cache
 * @author	Joel Vardy <info@joelvardy.com>
 */
class Cache {


	protected static $config = array(
		'host' => '127.0.0.1',
		'port' => 11211,
		'key_prefix' => ''
	);

	protected static $memcached;


	/**
	 * Define configuration options
	 *
	 * @return	void
	 */
	public static function configure($host = false, $port = false, $key_prefix = false) {

		if ($host) self::$config['host'] = $host;
		if ($port) self::$config['port'] = $port;
		if ($key_prefix) self::$config['key_prefix'] = $key_prefix;

	}


	/**
	 * Return memcached instance
	 *
	 * @return	memcached instance|boolean
	 */
	protected static function memcached() {

		// Ensure the extension is available
		if ( ! extension_loaded('memcached')) return false;

		// If the memcached instance has not been defined
		if (self::$memcached == null) {

			// Create a new instance
			self::$memcached = new \Memcached();
			if ( ! self::$memcached->addServer(self::$config['host'], self::$config['port'])) return false;

		}

		return self::$memcached;

	}


	/**
	 * Return key
	 *
	 * @param	string [$key] The string to generate a key from
	 * @return	string
	 */
	protected static function key($key) {

		return self::$config['key_prefix'].$key;

	}


	/**
	 * Store data in cache
	 *
	 * @param	string [$key] The key to store
	 * @param	mixed [$value] The value to store
	 * @param	integer [$ttl] The number of seconds until the value expires
	 * @return	boolean
	 */
	public static function store($key, $value, $ttl = 0) {

		// Ensure memcached is available
		if ( ! self::memcached()) return false;

		return (boolean) self::memcached()->set(self::key($key), $value, $ttl);

	}


	/**
	 * Fetch data in cache
	 *
	 * @param	string [$key] The key to retrieve
	 * @return	mixed
	 */
	public static function fetch($key) {

		// Ensure memcached is available
		if ( ! self::memcached()) return false;

		return self::memcached()->get(self::key($key));

	}


	/**
	 * Delete data in cache
	 *
	 * @param	string [$key] The key to delete
	 * @return	boolean
	 */
	public static function delete($key) {

		// Ensure memcached is available
		if ( ! self::memcached()) return false;

		return (boolean) self::memcached()->delete(self::key($key));

	}


}
