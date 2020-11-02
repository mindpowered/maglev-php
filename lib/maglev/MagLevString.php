<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;

class MagLevString extends MagLevAny {
	/**
	 * @var string
	 */
	public $value;

	/**
	 * @param string $value
	 * 
	 * @return MagLevString
	 */
	public static function fromString ($value) {
		#/src/maglev/MagLev.hx:543: characters 9-39
		return new MagLevString($value);
	}

	/**
	 * @return int
	 */
	public static function getStaticType () {
		#/src/maglev/MagLev.hx:556: characters 9-17
		return 3;
	}

	/**
	 * @param string $value
	 * 
	 * @return void
	 */
	public function __construct ($value) {
		#/src/maglev/MagLev.hx:546: characters 9-27
		$this->value = $value;
		#/src/maglev/MagLev.hx:547: characters 9-16
		parent::__construct();
	}

	/**
	 * @return string
	 */
	public function getString () {
		#/src/maglev/MagLev.hx:550: characters 9-26
		return $this->value;
	}

	/**
	 * @return int
	 */
	public function getType () {
		#/src/maglev/MagLev.hx:553: characters 9-17
		return 3;
	}

	/**
	 * @param MagLevAny $other
	 * 
	 * @return bool
	 */
	public function isEqual ($other) {
		#/src/maglev/MagLev.hx:559: lines 559-565
		if ($other->getType() === $this->getType()) {
			#/src/maglev/MagLev.hx:560: characters 13-47
			$o = Boot::typedCast(Boot::getClass(MagLevString::class), $other);
			#/src/maglev/MagLev.hx:561: characters 13-48
			return $this->getString() === $o->getString();
		} else {
			#/src/maglev/MagLev.hx:564: characters 13-25
			return false;
		}
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLev.hx:568: characters 9-53
		return new MagLevString("\"" . ($this->value??'null') . "\"");
	}
}

Boot::registerClass(MagLevString::class, 'maglev.MagLevString');
