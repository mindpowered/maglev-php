<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace haxe\io;

use \php\Boot;
use \php\_Boot\HxEnum;

/**
 * The possible IO errors that can occur
 */
class Error extends HxEnum {
	/**
	 * The IO is set into nonblocking mode and some data cannot be read or written
	 * 
	 * @return Error
	 */
	static public function Blocked () {
		static $inst = null;
		if (!$inst) $inst = new Error('Blocked', 0, []);
		return $inst;
	}

	/**
	 * Other errors
	 * 
	 * @param mixed $e
	 * 
	 * @return Error
	 */
	static public function Custom ($e) {
		return new Error('Custom', 3, [$e]);
	}

	/**
	 * An operation on Bytes is outside of its valid range
	 * 
	 * @return Error
	 */
	static public function OutsideBounds () {
		static $inst = null;
		if (!$inst) $inst = new Error('OutsideBounds', 2, []);
		return $inst;
	}

	/**
	 * An integer value is outside its allowed range
	 * 
	 * @return Error
	 */
	static public function Overflow () {
		static $inst = null;
		if (!$inst) $inst = new Error('Overflow', 1, []);
		return $inst;
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			0 => 'Blocked',
			3 => 'Custom',
			2 => 'OutsideBounds',
			1 => 'Overflow',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'Blocked' => 0,
			'Custom' => 1,
			'OutsideBounds' => 0,
			'Overflow' => 0,
		];
	}
}

Boot::registerClass(Error::class, 'haxe.io.Error');
