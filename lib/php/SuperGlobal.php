<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace php;


class SuperGlobal {

	/**
	 * @return mixed
	 */
	public static function get_GLOBALS () {
		#/opt/haxe/std/php/SuperGlobal.hx:32: characters 3-33
		return $GLOBALS;
	}

	/**
	 * @return mixed
	 */
	public static function get__COOKIE () {
		#/opt/haxe/std/php/SuperGlobal.hx:72: characters 3-33
		return $_COOKIE;
	}

	/**
	 * @return mixed
	 */
	public static function get__ENV () {
		#/opt/haxe/std/php/SuperGlobal.hx:96: characters 3-30
		return $_ENV;
	}

	/**
	 * @return mixed
	 */
	public static function get__FILES () {
		#/opt/haxe/std/php/SuperGlobal.hx:64: characters 3-32
		return $_FILES;
	}

	/**
	 * @return mixed
	 */
	public static function get__GET () {
		#/opt/haxe/std/php/SuperGlobal.hx:48: characters 3-30
		return $_GET;
	}

	/**
	 * @return mixed
	 */
	public static function get__POST () {
		#/opt/haxe/std/php/SuperGlobal.hx:56: characters 3-31
		return $_POST;
	}

	/**
	 * @return mixed
	 */
	public static function get__REQUEST () {
		#/opt/haxe/std/php/SuperGlobal.hx:88: characters 3-34
		return $_REQUEST;
	}

	/**
	 * @return mixed
	 */
	public static function get__SERVER () {
		#/opt/haxe/std/php/SuperGlobal.hx:40: characters 3-33
		return $_SERVER;
	}

	/**
	 * @return mixed
	 */
	public static function get__SESSION () {
		#/opt/haxe/std/php/SuperGlobal.hx:80: characters 3-34
		return $_SESSION;
	}
}

Boot::registerClass(SuperGlobal::class, 'php.SuperGlobal');
Boot::registerGetters('php\\SuperGlobal', [
	'_ENV' => true,
	'_REQUEST' => true,
	'_SESSION' => true,
	'_COOKIE' => true,
	'_FILES' => true,
	'_POST' => true,
	'_GET' => true,
	'_SERVER' => true,
	'GLOBALS' => true
]);
