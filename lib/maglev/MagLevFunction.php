<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;

class MagLevFunction extends MagLevAny {
	/**
	 * @var string
	 */
	public $name;
	/**
	 * @var \Closure
	 */
	public $value;

	/**
	 * @param \Closure $value
	 * 
	 * @return MagLevFunction
	 */
	public static function fromFunction ($value) {
		#/src/maglev/MagLev.hx:328: characters 9-41
		return new MagLevFunction($value);
	}

	/**
	 * @param \Closure $value
	 * @param string $name
	 * 
	 * @return MagLevFunction
	 */
	public static function fromNamedFunction ($value, $name) {
		#/src/maglev/MagLev.hx:331: characters 9-47
		return new MagLevFunction($value, $name);
	}

	/**
	 * @return int
	 */
	public static function getStaticType () {
		#/src/maglev/MagLev.hx:351: characters 9-19
		return 200;
	}

	/**
	 * @param \Closure $value
	 * @param string $name
	 * 
	 * @return void
	 */
	public function __construct ($value, $name = null) {
		#/src/maglev/MagLev.hx:334: characters 9-25
		$this->name = $name;
		#/src/maglev/MagLev.hx:335: characters 9-27
		$this->value = $value;
		#/src/maglev/MagLev.hx:336: characters 9-16
		parent::__construct();
	}

	/**
	 * @param MagLevArray $args
	 * 
	 * @return MagLevResult
	 */
	public function call ($args) {
		#/src/maglev/MagLev.hx:339: characters 9-27
		return ($this->value)($args);
	}

	/**
	 * @return string
	 */
	public function getName () {
		#/src/maglev/MagLev.hx:345: characters 9-20
		return $this->name;
	}

	/**
	 * @return int
	 */
	public function getType () {
		#/src/maglev/MagLev.hx:348: characters 9-19
		return 200;
	}

	/**
	 * @return bool
	 */
	public function hasName () {
		#/src/maglev/MagLev.hx:342: characters 9-28
		return $this->name !== null;
	}

	/**
	 * @param MagLevAny $other
	 * 
	 * @return bool
	 */
	public function isEqual ($other) {
		#/src/maglev/MagLev.hx:354: lines 354-365
		if ($other->getType() === $this->getType()) {
			#/src/maglev/MagLev.hx:355: characters 13-49
			$o = Boot::typedCast(Boot::getClass(MagLevFunction::class), $other);
			#/src/maglev/MagLev.hx:356: lines 356-361
			if ($this->hasName() && $o->hasName()) {
				#/src/maglev/MagLev.hx:357: characters 17-48
				return $this->getName() === $o->getName();
			} else {
				#/src/maglev/MagLev.hx:360: characters 17-29
				return false;
			}
		} else {
			#/src/maglev/MagLev.hx:364: characters 13-25
			return false;
		}
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLev.hx:368: lines 368-373
		if ($this->hasName()) {
			#/src/maglev/MagLev.hx:369: characters 13-63
			return new MagLevString("<function " . ($this->name??'null') . ">");
		} else {
			#/src/maglev/MagLev.hx:372: characters 13-51
			return new MagLevString("<anon func>");
		}
	}
}

Boot::registerClass(MagLevFunction::class, 'maglev.MagLevFunction');
