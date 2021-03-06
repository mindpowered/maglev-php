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
		#/src/maglev/MagLev.hx:467: characters 9-33
		return new MagLevArray();
	}

	/**
	 * @return int
	 */
	public static function getStaticType () {
		#/src/maglev/MagLev.hx:502: characters 9-17
		return 5;
	}

	/**
	 * @return void
	 */
	public function __construct () {
		#/src/maglev/MagLev.hx:470: characters 9-40
		$this->values = new \Array_hx();
		#/src/maglev/MagLev.hx:471: characters 9-16
		parent::__construct();
	}

	/**
	 * @param int $i
	 * 
	 * @return MagLevAny
	 */
	public function get ($i) {
		#/src/maglev/MagLev.hx:493: characters 9-42
		return MagLevNull::wrap(($this->values->arr[$i] ?? null));
	}

	/**
	 * @return int
	 */
	public function getType () {
		#/src/maglev/MagLev.hx:499: characters 9-17
		return 5;
	}

	/**
	 * @param MagLevAny $other
	 * 
	 * @return bool
	 */
	public function isEqual ($other) {
		#/src/maglev/MagLev.hx:505: lines 505-526
		if ($other->getType() === $this->getType()) {
			#/src/maglev/MagLev.hx:506: characters 13-46
			$o = Boot::typedCast(Boot::getClass(MagLevArray::class), $other);
			#/src/maglev/MagLev.hx:507: lines 507-522
			if ($this->size() === $o->size()) {
				#/src/maglev/MagLev.hx:508: characters 17-64
				$arr = Boot::typedCast(Boot::getClass(MagLevArray::class), $other);
				#/src/maglev/MagLev.hx:509: lines 509-517
				$_g = 0;
				$_g1 = $this->values;
				while ($_g < $_g1->length) {
					#/src/maglev/MagLev.hx:509: characters 22-26
					$item = ($_g1->arr[$_g] ?? null);
					#/src/maglev/MagLev.hx:509: lines 509-517
					++$_g;
					#/src/maglev/MagLev.hx:510: characters 21-44
					$found = false;
					#/src/maglev/MagLev.hx:511: lines 511-515
					$_g2 = 0;
					$_g3 = $arr->values;
					while ($_g2 < $_g3->length) {
						#/src/maglev/MagLev.hx:511: characters 26-31
						$item2 = ($_g3->arr[$_g2] ?? null);
						#/src/maglev/MagLev.hx:511: lines 511-515
						++$_g2;
						#/src/maglev/MagLev.hx:512: lines 512-514
						if ($item->isEqual($item2)) {
							#/src/maglev/MagLev.hx:513: characters 29-41
							$found = true;
						}
					}
					#/src/maglev/MagLev.hx:516: characters 21-45
					if (!$found) {
						#/src/maglev/MagLev.hx:516: characters 33-45
						return false;
					}
				}
				#/src/maglev/MagLev.hx:518: characters 17-28
				return true;
			} else {
				#/src/maglev/MagLev.hx:521: characters 17-29
				return false;
			}
		} else {
			#/src/maglev/MagLev.hx:525: characters 13-25
			return false;
		}
	}

	/**
	 * @return MagLevAny
	 */
	public function pop () {
		#/src/maglev/MagLev.hx:477: characters 32-44
		$_this = $this->values;
		if ($_this->length > 0) {
			$_this->length--;
		}
		#/src/maglev/MagLev.hx:477: characters 9-45
		return MagLevNull::wrap(array_pop($_this->arr));
	}

	/**
	 * @param MagLevAny $x
	 * 
	 * @return int
	 */
	public function push ($x) {
		#/src/maglev/MagLev.hx:480: characters 9-23
		$_this = $this->values;
		$_this->arr[$_this->length++] = $x;
		#/src/maglev/MagLev.hx:481: characters 9-22
		return $this->size();
	}

	/**
	 * @return void
	 */
	public function reverse () {
		#/src/maglev/MagLev.hx:490: characters 9-25
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
		#/src/maglev/MagLev.hx:496: characters 9-43
		$this->values->offsetSet($i, MagLevNull::wrap($value));
	}

	/**
	 * @return MagLevAny
	 */
	public function shift () {
		#/src/maglev/MagLev.hx:484: characters 32-46
		$_this = $this->values;
		if ($_this->length > 0) {
			$_this->length--;
		}
		#/src/maglev/MagLev.hx:484: characters 9-47
		return MagLevNull::wrap(array_shift($_this->arr));
	}

	/**
	 * @return int
	 */
	public function size () {
		#/src/maglev/MagLev.hx:474: characters 9-29
		return $this->values->length;
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLev.hx:529: characters 9-28
		$s = "[";
		#/src/maglev/MagLev.hx:530: characters 9-31
		$first = true;
		#/src/maglev/MagLev.hx:531: lines 531-537
		$_g = 0;
		$_g1 = $this->values;
		while ($_g < $_g1->length) {
			#/src/maglev/MagLev.hx:531: characters 14-18
			$item = ($_g1->arr[$_g] ?? null);
			#/src/maglev/MagLev.hx:531: lines 531-537
			++$_g;
			#/src/maglev/MagLev.hx:532: lines 532-534
			if (!$first) {
				#/src/maglev/MagLev.hx:533: characters 17-26
				$s = ($s??'null') . ", ";
			}
			#/src/maglev/MagLev.hx:535: characters 13-43
			$s = ($s??'null') . ($item->toJson()->getString()??'null');
			#/src/maglev/MagLev.hx:536: characters 13-26
			$first = false;
		}
		#/src/maglev/MagLev.hx:538: characters 9-17
		$s = ($s??'null') . "]";
		#/src/maglev/MagLev.hx:539: characters 9-35
		return new MagLevString($s);
	}

	/**
	 * @param MagLevAny $x
	 * 
	 * @return void
	 */
	public function unshift ($x) {
		#/src/maglev/MagLev.hx:487: characters 9-43
		$_this = $this->values;
		$x1 = MagLevNull::wrap($x);
		$_this->length = array_unshift($_this->arr, $x1);
	}
}

Boot::registerClass(MagLevArray::class, 'maglev.MagLevArray');
