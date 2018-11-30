<?php

namespace Joelvardy;

/**
 * Database connection library
 *
 * @link	https://github.com/joelvardy/database
 * @author	Joel Vardy <info@joelvardy.com>
 */
class Database {


	protected static $config = array(
		'host' => '127.0.0.1',
		'port' => 3306
	);

	private static $instance;


	/**
	 * Define configuration options
	 *
	 * @return	void
	 */
	public static function configure($host = false, $port = false, $username = false, $password = false, $name = false) {

		if ($host) self::$config['host'] = $host;
		if ($port) self::$config['port'] = $port;
		if ($username) self::$config['username'] = $username;
		if ($password) self::$config['password'] = $password;
		if ($name) self::$config['name'] = $name;

	}


	/**
	 * Return MySQLi instance
	 *
	 * @return	mysqli instance
	 */
	public static function instance() {

		// If the database instance has not been defined create a new instance
		if (self::$instance == null) {

			// Ensure configuration has been defined
			if ( ! isset(self::$config['username']) || ! isset(self::$config['password']) || ! isset(self::$config['name'])) {
				throw new \Exception('You must define database configuration details.');
			}

			@self::$instance = new \mysqli(self::$config['host'], self::$config['username'], self::$config['password'], self::$config['name'], self::$config['port']);

			// Upon failure, return a HTTP 500 header
			if (self::$instance->connect_error) {
				throw new \Exception('Unable to connect to database.');
			}

		}

		return self::$instance;

	}

}
