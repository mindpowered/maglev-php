<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;
use \maglev\_MagLev\MagLevType_Impl_;

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
		#/src/maglev/MagLev.hx:248: characters 9-41
		return new MagLevFunction($value);
	}

	/**
	 * @param \Closure $value
	 * @param string $name
	 * 
	 * @return MagLevFunction
	 */
	public static function fromNamedFunction ($value, $name) {
		#/src/maglev/MagLev.hx:251: characters 9-47
		return new MagLevFunction($value, $name);
	}

	/**
	 * @param \Closure $value
	 * @param string $name
	 * 
	 * @return void
	 */
	public function __construct ($value, $name = null) {
		#/src/maglev/MagLev.hx:254: characters 9-25
		$this->name = $name;
		#/src/maglev/MagLev.hx:255: characters 9-27
		$this->value = $value;
		#/src/maglev/MagLev.hx:256: characters 9-16
		parent::__construct();
	}

	/**
	 * @param MagLevArray $args
	 * 
	 * @return MagLevResult
	 */
	public function call ($args) {
		#/src/maglev/MagLev.hx:259: characters 9-27
		return ($this->value)($args);
	}

	/**
	 * @return string
	 */
	public function getName () {
		#/src/maglev/MagLev.hx:265: characters 9-20
		return $this->name;
	}

	/**
	 * @return int
	 */
	public function getType () {
		#/src/maglev/MagLev.hx:268: characters 9-46
		return MagLevType_Impl_::$MagLevType_Function;
	}

	/**
	 * @return bool
	 */
	public function hasName () {
		#/src/maglev/MagLev.hx:262: characters 9-28
		return $this->name !== null;
	}

	/**
	 * @param MagLevAny $other
	 * 
	 * @return bool
	 */
	public function isEqual ($other) {
		#/src/maglev/MagLev.hx:271: lines 271-282
		if ($other->getType() === $this->getType()) {
			#/src/maglev/MagLev.hx:272: characters 13-49
			$o = Boot::typedCast(Boot::getClass(MagLevFunction::class), $other);
			#/src/maglev/MagLev.hx:273: lines 273-278
			if ($this->hasName() && $o->hasName()) {
				#/src/maglev/MagLev.hx:274: characters 17-48
				return $this->getName() === $o->getName();
			} else {
				#/src/maglev/MagLev.hx:277: characters 17-29
				return false;
			}
		} else {
			#/src/maglev/MagLev.hx:281: characters 13-25
			return false;
		}
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLev.hx:285: lines 285-290
		if ($this->hasName()) {
			#/src/maglev/MagLev.hx:286: characters 13-63
			return new MagLevString("<function " . ($this->name??'null') . ">");
		} else {
			#/src/maglev/MagLev.hx:289: characters 13-51
			return new MagLevString("<anon func>");
		}
	}
}

Boot::registerClass(MagLevFunction::class, 'maglev.MagLevFunction');
