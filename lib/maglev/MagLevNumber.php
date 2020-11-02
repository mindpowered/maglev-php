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
		#/src/maglev/MagLev.hx:503: characters 9-39
		return new MagLevNumber($value);
	}

	/**
	 * @param int $value
	 * 
	 * @return MagLevNumber
	 */
	public static function fromInt ($value) {
		#/src/maglev/MagLev.hx:506: characters 9-39
		return new MagLevNumber($value);
	}

	/**
	 * @return int
	 */
	public static function getStaticType () {
		#/src/maglev/MagLev.hx:522: characters 9-17
		return 4;
	}

	/**
	 * @param float $value
	 * 
	 * @return void
	 */
	public function __construct ($value) {
		#/src/maglev/MagLev.hx:509: characters 9-27
		$this->value = $value;
		#/src/maglev/MagLev.hx:510: characters 9-16
		parent::__construct();
	}

	/**
	 * @return float
	 */
	public function getFloat () {
		#/src/maglev/MagLev.hx:513: characters 9-26
		return $this->value;
	}

	/**
	 * @return int
	 */
	public function getInt () {
		#/src/maglev/MagLev.hx:516: characters 16-35
		return (int)($this->value);
	}

	/**
	 * @return int
	 */
	public function getType () {
		#/src/maglev/MagLev.hx:519: characters 9-17
		return 4;
	}

	/**
	 * @param MagLevAny $other
	 * 
	 * @return bool
	 */
	public function isEqual ($other) {
		#/src/maglev/MagLev.hx:525: lines 525-531
		if ($other->getType() === $this->getType()) {
			#/src/maglev/MagLev.hx:526: characters 13-47
			$o = Boot::typedCast(Boot::getClass(MagLevNumber::class), $other);
			#/src/maglev/MagLev.hx:527: characters 13-46
			return Boot::equal($this->getFloat(), $o->getFloat());
		} else {
			#/src/maglev/MagLev.hx:530: characters 13-25
			return false;
		}
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLev.hx:534: characters 9-51
		return new MagLevString(\Std::string($this->value));
	}
}

Boot::registerClass(MagLevNumber::class, 'maglev.MagLevNumber');
