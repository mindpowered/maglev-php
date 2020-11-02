<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;
use \haxe\ds\StringMap;
use \php\_NativeIndexedArray\NativeIndexedArrayIterator;

class MagLevObject extends MagLevAny {
	/**
	 * @var StringMap
	 */
	public $values;

	/**
	 * @return MagLevObject
	 */
	public static function create () {
		#/src/maglev/MagLev.hx:337: characters 9-34
		return new MagLevObject();
	}

	/**
	 * @return int
	 */
	public static function getStaticType () {
		#/src/maglev/MagLev.hx:372: characters 9-17
		return 6;
	}

	/**
	 * @return void
	 */
	public function __construct () {
		#/src/maglev/MagLev.hx:340: characters 9-50
		$this->values = new StringMap();
		#/src/maglev/MagLev.hx:341: characters 9-16
		parent::__construct();
	}

	/**
	 * @return void
	 */
	public function clear () {
		#/src/maglev/MagLev.hx:344: characters 9-23
		$this1 = $this->values;
		$this2 = [];
		$this1->data = $this2;
	}

	/**
	 * @param string $key
	 * 
	 * @return bool
	 */
	public function exists ($key) {
		#/src/maglev/MagLev.hx:347: characters 16-34
		return array_key_exists($key, $this->values->data);
	}

	/**
	 * @param string $key
	 * 
	 * @return MagLevAny
	 */
	public function get ($key) {
		#/src/maglev/MagLev.hx:350: characters 9-48
		return MagLevNull::wrap(($this->values->data[$key] ?? null));
	}

	/**
	 * @return StringMap
	 */
	public function getStringMap () {
		#/src/maglev/MagLev.hx:366: characters 9-22
		return $this->values;
	}

	/**
	 * @return int
	 */
	public function getType () {
		#/src/maglev/MagLev.hx:369: characters 9-17
		return 6;
	}

	/**
	 * @param MagLevAny $other
	 * 
	 * @return bool
	 */
	public function isEqual ($other) {
		#/src/maglev/MagLev.hx:375: lines 375-398
		if ($other->getType() === $this->getType()) {
			#/src/maglev/MagLev.hx:376: characters 13-62
			$obj = Boot::typedCast(Boot::getClass(MagLevObject::class), $other);
			#/src/maglev/MagLev.hx:377: characters 25-38
			$key = new NativeIndexedArrayIterator(array_values(array_map("strval", array_keys($this->values->data))));
			while ($key->hasNext()) {
				#/src/maglev/MagLev.hx:377: lines 377-393
				$key1 = $key->next();
				#/src/maglev/MagLev.hx:378: characters 17-40
				$found = false;
				#/src/maglev/MagLev.hx:379: characters 17-40
				$equal = false;
				#/src/maglev/MagLev.hx:380: characters 29-54
				$key2 = new NativeIndexedArrayIterator(array_values(array_map("strval", array_keys($obj->getStringMap()->data))));
				while ($key2->hasNext()) {
					#/src/maglev/MagLev.hx:380: lines 380-389
					$key21 = $key2->next();
					#/src/maglev/MagLev.hx:381: lines 381-388
					if ($key1 === $key21) {
						#/src/maglev/MagLev.hx:382: characters 25-37
						$found = true;
						#/src/maglev/MagLev.hx:383: characters 25-57
						$val = ($this->values->data[$key1] ?? null);
						#/src/maglev/MagLev.hx:384: characters 25-63
						$val2 = ($obj->values->data[$key21] ?? null);
						#/src/maglev/MagLev.hx:385: lines 385-387
						if ($val->isEqual($val2)) {
							#/src/maglev/MagLev.hx:386: characters 29-41
							$equal = true;
						}
					}
				}
				#/src/maglev/MagLev.hx:390: lines 390-392
				if (!$found || !$equal) {
					#/src/maglev/MagLev.hx:391: characters 21-33
					return false;
				}
			}
			#/src/maglev/MagLev.hx:394: characters 13-24
			return true;
		} else {
			#/src/maglev/MagLev.hx:397: characters 13-25
			return false;
		}
	}

	/**
	 * @return MagLevArray
	 */
	public function keys () {
		#/src/maglev/MagLev.hx:353: characters 9-49
		$arr = new MagLevArray();
		#/src/maglev/MagLev.hx:354: characters 18-31
		$k = new NativeIndexedArrayIterator(array_values(array_map("strval", array_keys($this->values->data))));
		while ($k->hasNext()) {
			#/src/maglev/MagLev.hx:354: lines 354-356
			$k1 = $k->next();
			#/src/maglev/MagLev.hx:355: characters 13-42
			$arr->push(new MagLevString($k1));
		}
		#/src/maglev/MagLev.hx:357: characters 9-19
		return $arr;
	}

	/**
	 * @param string $key
	 * 
	 * @return bool
	 */
	public function remove ($key) {
		#/src/maglev/MagLev.hx:360: characters 16-34
		return $this->values->remove($key);
	}

	/**
	 * @param string $key
	 * @param MagLevAny $value
	 * 
	 * @return void
	 */
	public function set ($key, $value) {
		#/src/maglev/MagLev.hx:363: characters 9-48
		$this1 = $this->values;
		$value1 = MagLevNull::wrap($value);
		$this1->data[$key] = $value1;
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLev.hx:401: characters 9-28
		$s = "{";
		#/src/maglev/MagLev.hx:402: characters 9-31
		$first = true;
		#/src/maglev/MagLev.hx:403: characters 21-34
		$key = new NativeIndexedArrayIterator(array_values(array_map("strval", array_keys($this->values->data))));
		while ($key->hasNext()) {
			#/src/maglev/MagLev.hx:403: lines 403-411
			$key1 = $key->next();
			#/src/maglev/MagLev.hx:404: lines 404-406
			if (!$first) {
				#/src/maglev/MagLev.hx:405: characters 17-26
				$s = ($s??'null') . ", ";
			}
			#/src/maglev/MagLev.hx:407: characters 13-21
			$s = ($s??'null') . ($key1??'null');
			#/src/maglev/MagLev.hx:408: characters 13-22
			$s = ($s??'null') . ": ";
			#/src/maglev/MagLev.hx:409: characters 13-38
			$s = ($s??'null') . (\Std::string(($this->values->data[$key1] ?? null)->toJson())??'null');
			#/src/maglev/MagLev.hx:410: characters 13-26
			$first = false;
		}
		#/src/maglev/MagLev.hx:412: characters 9-17
		$s = ($s??'null') . "}";
		#/src/maglev/MagLev.hx:413: characters 9-35
		return new MagLevString($s);
	}
}

Boot::registerClass(MagLevObject::class, 'maglev.MagLevObject');
