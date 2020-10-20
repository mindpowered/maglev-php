<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;
use \haxe\Exception;

/**
 * Abstract type for MagLev types except for Result or Error
 */
class MagLevAny {
	/**
	 * @return void
	 */
	public function __construct () {
	}

	/**
	 * @return int
	 */
	public function getType () {
		#/src/maglev/MagLev.hx:235: characters 9-14
		throw Exception::thrown("getType does not exist for MagLevAny");
	}

	/**
	 * @param MagLevAny $o
	 * 
	 * @return bool
	 */
	public function isEqual ($o) {
		#/src/maglev/MagLev.hx:238: characters 9-14
		throw Exception::thrown("isEqual does not exist for MagLevAny");
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLev.hx:232: characters 9-14
		throw Exception::thrown("toJson does not exist for MagLevAny");
	}
}

Boot::registerClass(MagLevAny::class, 'maglev.MagLevAny');
