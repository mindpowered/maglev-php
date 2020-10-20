<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;

class MagLevArray extends MagLevAny {
	/**
	 * @var \Array_hx
	 */
	public $values;

	/**
	 * @return MagLevArray
	 */
	public static function create () {
		#/src/maglev/MagLev.hx:372: characters 9-33
		return new MagLevArray();
	}

	/**
	 * @return int
	 */
	public static function getStaticType () {
		#/src/maglev/MagLev.hx:407: characters 9-17
		return 5;
	}

	/**
	 * @return void
	 */
	public function __construct () {
		#/src/maglev/MagLev.hx:375: characters 9-40
		$this->values = new \Array_hx();
		#/src/maglev/MagLev.hx:376: characters 9-16
		parent::__construct();
	}

	/**
	 * @param int $i
	 * 
	 * @return MagLevAny
	 */
	public function get ($i) {
		#/src/maglev/MagLev.hx:398: characters 9-42
		return MagLevNull::wrap(($this->values->arr[$i] ?? null));
	}

	/**
	 * @return int
	 */
	public function getType () {
		#/src/maglev/MagLev.hx:404: characters 9-17
		return 5;
	}

	/**
	 * @param MagLevAny $other
	 * 
	 * @return bool
	 */
	public function isEqual ($other) {
		#/src/maglev/MagLev.hx:410: lines 410-431
		if ($other->getType() === $this->getType()) {
			#/src/maglev/MagLev.hx:411: characters 13-46
			$o = Boot::typedCast(Boot::getClass(MagLevArray::class), $other);
			#/src/maglev/MagLev.hx:412: lines 412-427
			if ($this->size() === $o->size()) {
				#/src/maglev/MagLev.hx:413: characters 17-64
				$arr = Boot::typedCast(Boot::getClass(MagLevArray::class), $other);
				#/src/maglev/MagLev.hx:414: lines 414-422
				$_g = 0;
				$_g1 = $this->values;
				while ($_g < $_g1->length) {
					#/src/maglev/MagLev.hx:414: characters 22-26
					$item = ($_g1->arr[$_g] ?? null);
					#/src/maglev/MagLev.hx:414: lines 414-422
					++$_g;
					#/src/maglev/MagLev.hx:415: characters 21-44
					$found = false;
					#/src/maglev/MagLev.hx:416: lines 416-420
					$_g2 = 0;
					$_g3 = $arr->values;
					while ($_g2 < $_g3->length) {
						#/src/maglev/MagLev.hx:416: characters 26-31
						$item2 = ($_g3->arr[$_g2] ?? null);
						#/src/maglev/MagLev.hx:416: lines 416-420
						++$_g2;
						#/src/maglev/MagLev.hx:417: lines 417-419
						if ($item->isEqual($item2)) {
							#/src/maglev/MagLev.hx:418: characters 29-41
							$found = true;
						}
					}
					#/src/maglev/MagLev.hx:421: characters 21-45
					if (!$found) {
						#/src/maglev/MagLev.hx:421: characters 33-45
						return false;
					}
				}
				#/src/maglev/MagLev.hx:423: characters 17-28
				return true;
			} else {
				#/src/maglev/MagLev.hx:426: characters 17-29
				return false;
			}
		} else {
			#/src/maglev/MagLev.hx:430: characters 13-25
			return false;
		}
	}

	/**
	 * @return MagLevAny
	 */
	public function pop () {
		#/src/maglev/MagLev.hx:382: characters 32-44
		$_this = $this->values;
		if ($_this->length > 0) {
			$_this->length--;
		}
		#/src/maglev/MagLev.hx:382: characters 9-45
		return MagLevNull::wrap(array_pop($_this->arr));
	}

	/**
	 * @param MagLevAny $x
	 * 
	 * @return int
	 */
	public function push ($x) {
		#/src/maglev/MagLev.hx:385: characters 9-23
		$_this = $this->values;
		$_this->arr[$_this->length++] = $x;
		#/src/maglev/MagLev.hx:386: characters 9-22
		return $this->size();
	}

	/**
	 * @return void
	 */
	public function reverse () {
		#/src/maglev/MagLev.hx:395: characters 9-25
		$_this = $this->values;
		$_this->arr = array_reverse($_this->arr);
	}

	/**
	 * @param int $i
	 * @param MagLevAny $value
	 * 
	 * @return void
	 */
	public function set ($i, $value) {
		#/src/maglev/MagLev.hx:401: characters 9-43
		$this->values->offsetSet($i, MagLevNull::wrap($value));
	}

	/**
	 * @return MagLevAny
	 */
	public function shift () {
		#/src/maglev/MagLev.hx:389: characters 32-46
		$_this = $this->values;
		if ($_this->length > 0) {
			$_this->length--;
		}
		#/src/maglev/MagLev.hx:389: characters 9-47
		return MagLevNull::wrap(array_shift($_this->arr));
	}

	/**
	 * @return int
	 */
	public function size () {
		#/src/maglev/MagLev.hx:379: characters 9-29
		return $this->values->length;
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLev.hx:434: characters 9-28
		$s = "[";
		#/src/maglev/MagLev.hx:435: characters 9-31
		$first = true;
		#/src/maglev/MagLev.hx:436: lines 436-442
		$_g = 0;
		$_g1 = $this->values;
		while ($_g < $_g1->length) {
			#/src/maglev/MagLev.hx:436: characters 14-18
			$item = ($_g1->arr[$_g] ?? null);
			#/src/maglev/MagLev.hx:436: lines 436-442
			++$_g;
			#/src/maglev/MagLev.hx:437: lines 437-439
			if (!$first) {
				#/src/maglev/MagLev.hx:438: characters 17-26
				$s = ($s??'null') . ", ";
			}
			#/src/maglev/MagLev.hx:440: characters 13-43
			$s = ($s??'null') . ($item->toJson()->getString()??'null');
			#/src/maglev/MagLev.hx:441: characters 13-26
			$first = false;
		}
		#/src/maglev/MagLev.hx:443: characters 9-17
		$s = ($s??'null') . "]";
		#/src/maglev/MagLev.hx:444: characters 9-35
		return new MagLevString($s);
	}

	/**
	 * @param MagLevAny $x
	 * 
	 * @return void
	 */
	public function unshift ($x) {
		#/src/maglev/MagLev.hx:392: characters 9-43
		$_this = $this->values;
		$x1 = MagLevNull::wrap($x);
		$_this->length = array_unshift($_this->arr, $x1);
	}
}

Boot::registerClass(MagLevArray::class, 'maglev.MagLevArray');
