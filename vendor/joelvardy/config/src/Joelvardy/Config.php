<?php

namespace Joelvardy;

/**
 * Config library
 *
 * @link	https://github.com/joelvardy/config
 * @author	Joel Vardy <info@joelvardy.com>
 */
class Config {


	protected static $_values;


	/**
	 * Define or retrieve configuration value
	 *
	 * @param	string [$key] The key of the configuration item
	 * @param	mixed [$value] The value of the key
	 * @return	mixed value of key or boolean false
	 */
	public static function value($key, $value = null) {

		// Set the value
		if ($value) {
			self::$_values[$key] = $value;
			return;
		}

		return (isset(self::$_values[$key]) ? self::$_values[$key] : false);

	}

}