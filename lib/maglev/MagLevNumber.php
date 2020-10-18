<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;

class MagLevNumber extends MagLevAny {
	/**
	 * @var float
	 */
	public $value;

	/**
	 * @param float $value
	 * 
	 * @return MagLevNumber
	 */
	public static function fromFloat ($value) {
		#/src/maglev/MagLevTypes.hx:378: characters 9-39
		return new MagLevNumber($value);
	}

	/**
	 * @param int $value
	 * 
	 * @return MagLevNumber
	 */
	public static function fromInt ($value) {
		#/src/maglev/MagLevTypes.hx:381: characters 9-39
		return new MagLevNumber($value);
	}

	/**
	 * @param float $value
	 * 
	 * @return void
	 */
	public function __construct ($value) {
		#/src/maglev/MagLevTypes.hx:384: characters 9-27
		$this->value = $value;
		#/src/maglev/MagLevTypes.hx:385: characters 9-16
		parent::__construct();
	}

	/**
	 * @return float
	 */
	public function getFloat () {
		#/src/maglev/MagLevTypes.hx:388: characters 9-26
		return $this->value;
	}

	/**
	 * @return int
	 */
	public function getInt () {
		#/src/maglev/MagLevTypes.hx:391: characters 16-35
		return (int)($this->value);
	}

	/**
	 * @return MagLevType
	 */
	public function getType () {
		#/src/maglev/MagLevTypes.hx:394: characters 9-33
		return MagLevType::MagLevType_Number();
	}

	/**
	 * @param MagLevAny $other
	 * 
	 * @return bool
	 */
	public function isEqual ($other) {
		#/src/maglev/MagLevTypes.hx:397: lines 397-403
		if ($other->getType() === $this->getType()) {
			#/src/maglev/MagLevTypes.hx:398: characters 13-47
			$o = Boot::typedCast(Boot::getClass(MagLevNumber::class), $other);
			#/src/maglev/MagLevTypes.hx:399: characters 13-46
			return Boot::equal($this->getFloat(), $o->getFloat());
		} else {
			#/src/maglev/MagLevTypes.hx:402: characters 13-25
			return false;
		}
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLevTypes.hx:406: characters 9-51
		return new MagLevString(\Std::string($this->value));
	}
}

Boot::registerClass(MagLevNumber::class, 'maglev.MagLevNumber');