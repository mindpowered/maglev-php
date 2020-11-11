<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;
use \haxe\Exception;
use \php\_Boot\HxClosure;
use \haxe\ds\StringMap;
use \php\_NativeIndexedArray\NativeIndexedArrayIterator;

class MagLevOld {
	/**
	 * @var MagLev
	 */
	public $maglev;

	/**
	 * @param string $key
	 * 
	 * @return MagLevOld
	 */
	public static function getInstance ($key) {
		#/src/maglev/MagLevOld.hx:49: characters 9-73
		$instance = new MagLevOld(MagLev::getInstance($key));
		#/src/maglev/MagLevOld.hx:50: characters 9-24
		return $instance;
	}

	/**
	 * @param MagLev $maglev
	 * 
	 * @return void
	 */
	public function __construct ($maglev) {
		#/src/maglev/MagLevOld.hx:45: characters 7-27
		$this->maglev = $maglev;
	}

	/**
	 * @param string $method
	 * @param \Array_hx $args
	 * 
	 * @return mixed
	 */
	public function call ($method, $args) {
		#/src/maglev/MagLevOld.hx:69: characters 9-52
		$myargs = new MagLevArray();
		#/src/maglev/MagLevOld.hx:70: lines 70-72
		$_g = 0;
		while ($_g < $args->length) {
			#/src/maglev/MagLevOld.hx:70: characters 14-17
			$arg = ($args->arr[$_g] ?? null);
			#/src/maglev/MagLevOld.hx:70: lines 70-72
			++$_g;
			#/src/maglev/MagLevOld.hx:71: characters 13-46
			$myargs->push($this->convertToMagLev($arg));
		}
		#/src/maglev/MagLevOld.hx:73: characters 9-57
		$myresult = $this->maglev->call($method, $myargs);
		#/src/maglev/MagLevOld.hx:74: lines 74-78
		if ($myresult->isError()) {
			#/src/maglev/MagLevOld.hx:75: characters 13-18
			throw Exception::thrown($myresult->getError()->getMessage());
		} else {
			#/src/maglev/MagLevOld.hx:77: characters 13-55
			return $this->convertToHaxe($myresult->getResult());
		}
	}

	/**
	 * @param MagLevAny $x
	 * 
	 * @return mixed
	 */
	public function convertToHaxe ($x) {
		#/src/maglev/MagLevOld.hx:106: lines 106-145
		if ($x->getType() === MagLevNull::getStaticType()) {
			#/src/maglev/MagLevOld.hx:107: characters 13-24
			return null;
		} else if ($x->getType() === MagLevBoolean::getStaticType()) {
			#/src/maglev/MagLevOld.hx:110: characters 13-44
			$y = Boot::typedCast(Boot::getClass(MagLevBoolean::class), $x);
			#/src/maglev/MagLevOld.hx:111: characters 13-31
			return $y->getBool();
		} else if ($x->getType() === MagLevString::getStaticType()) {
			#/src/maglev/MagLevOld.hx:114: characters 13-43
			$y = Boot::typedCast(Boot::getClass(MagLevString::class), $x);
			#/src/maglev/MagLevOld.hx:115: characters 13-33
			return $y->getString();
		} else if ($x->getType() === MagLevNumber::getStaticType()) {
			#/src/maglev/MagLevOld.hx:118: characters 13-43
			$y = Boot::typedCast(Boot::getClass(MagLevNumber::class), $x);
			#/src/maglev/MagLevOld.hx:119: characters 13-32
			return $y->getFloat();
		} else if ($x->getType() === MagLevArray::getStaticType()) {
			#/src/maglev/MagLevOld.hx:122: characters 13-42
			$y = Boot::typedCast(Boot::getClass(MagLevArray::class), $x);
			#/src/maglev/MagLevOld.hx:123: characters 13-51
			$arr = new \Array_hx();
			#/src/maglev/MagLevOld.hx:124: characters 13-23
			$i = 0;
			#/src/maglev/MagLevOld.hx:125: lines 125-128
			while ($i < $y->size()) {
				#/src/maglev/MagLevOld.hx:126: characters 17-50
				$x1 = $this->convertToHaxe($y->get($i));
				$arr->arr[$arr->length++] = $x1;
				#/src/maglev/MagLevOld.hx:127: characters 17-20
				++$i;
			}
			#/src/maglev/MagLevOld.hx:129: characters 13-23
			return $arr;
		} else if ($x->getType() === MagLevObject::getStaticType()) {
			#/src/maglev/MagLevOld.hx:132: characters 13-43
			$y = Boot::typedCast(Boot::getClass(MagLevObject::class), $x);
			#/src/maglev/MagLevOld.hx:133: characters 13-61
			$map = new StringMap();
			#/src/maglev/MagLevOld.hx:134: characters 13-33
			$keys = $y->keys();
			#/src/maglev/MagLevOld.hx:135: characters 13-23
			$i = 0;
			#/src/maglev/MagLevOld.hx:136: lines 136-140
			while ($i < $keys->size()) {
				#/src/maglev/MagLevOld.hx:137: characters 17-78
				$key = (Boot::typedCast(Boot::getClass(MagLevString::class), $keys->get($i)))->getString();
				#/src/maglev/MagLevOld.hx:138: characters 17-56
				$value = $this->convertToHaxe($y->get($key));
				$map->data[$key] = $value;
				#/src/maglev/MagLevOld.hx:139: characters 17-20
				++$i;
			}
			#/src/maglev/MagLevOld.hx:141: characters 13-23
			return $map;
		} else {
			#/src/maglev/MagLevOld.hx:144: characters 13-18
			throw Exception::thrown("convertToHaxe: unknown type");
		}
	}

	/**
	 * @param mixed $x
	 * 
	 * @return MagLevAny
	 */
	public function convertToMagLev ($x) {
		#/src/maglev/MagLevOld.hx:149: lines 149-194
		if ($x === null) {
			#/src/maglev/MagLevOld.hx:150: characters 13-39
			return MagLevNull::create();
		} else if (is_bool($x)) {
			#/src/maglev/MagLevOld.hx:153: characters 13-57
			return MagLevBoolean::fromBool(Boot::typedCast(Boot::getClass('Bool'), $x));
		} else if (is_string($x)) {
			#/src/maglev/MagLevOld.hx:156: characters 13-60
			return MagLevString::fromString(Boot::typedCast(Boot::getClass('String'), $x));
		} else if (Boot::isOfType($x, Boot::getClass('Int'))) {
			#/src/maglev/MagLevOld.hx:159: characters 13-54
			return MagLevNumber::fromInt(Boot::typedCast(Boot::getClass('Int'), $x));
		} else if ((is_float($x) || is_int($x))) {
			#/src/maglev/MagLevOld.hx:162: characters 13-45
			return MagLevNumber::fromFloat($x);
		} else {
			#/src/maglev/MagLevOld.hx:164: characters 18-39
			$f = $x;
			#/src/maglev/MagLevOld.hx:164: lines 164-194
			if (($f instanceof \Closure) || ($f instanceof HxClosure)) {
				#/src/maglev/MagLevOld.hx:165: characters 13-49
				$f = $x;
				#/src/maglev/MagLevOld.hx:166: characters 13-50
				return MagLevFunction::fromFunction($f);
			} else if (($x instanceof \Array_hx)) {
				#/src/maglev/MagLevOld.hx:169: characters 13-56
				$arr = MagLevArray::create();
				#/src/maglev/MagLevOld.hx:170: characters 13-34
				$y = $x;
				#/src/maglev/MagLevOld.hx:171: lines 171-173
				$_g = 0;
				while ($_g < $y->length) {
					#/src/maglev/MagLevOld.hx:171: characters 17-21
					$item = ($y->arr[$_g] ?? null);
					#/src/maglev/MagLevOld.hx:171: lines 171-173
					++$_g;
					#/src/maglev/MagLevOld.hx:172: characters 17-48
					$arr->push($this->convertToMagLev($item));
				}
				#/src/maglev/MagLevOld.hx:174: characters 13-23
				return $arr;
			} else if (($x instanceof StringMap)) {
				#/src/maglev/MagLevOld.hx:177: characters 13-41
				$map = $x;
				#/src/maglev/MagLevOld.hx:178: characters 13-58
				$obj = MagLevObject::create();
				#/src/maglev/MagLevOld.hx:179: characters 24-34
				$key = new NativeIndexedArrayIterator(array_values(array_map("strval", array_keys($map->data))));
				while ($key->hasNext()) {
					#/src/maglev/MagLevOld.hx:179: lines 179-181
					$key1 = $key->next();
					#/src/maglev/MagLevOld.hx:180: characters 17-60
					$obj->set($key1, $this->convertToMagLev(($map->data[$key1] ?? null)));
				}
				#/src/maglev/MagLevOld.hx:182: characters 13-23
				return $obj;
			} else if (\Reflect::isObject($x)) {
				#/src/maglev/MagLevOld.hx:185: characters 13-58
				$obj = MagLevObject::create();
				#/src/maglev/MagLevOld.hx:186: lines 186-189
				$_g = 0;
				$_g1 = \Reflect::fields($x);
				while ($_g < $_g1->length) {
					#/src/maglev/MagLevOld.hx:186: characters 18-23
					$field = ($_g1->arr[$_g] ?? null);
					#/src/maglev/MagLevOld.hx:186: lines 186-189
					++$_g;
					#/src/maglev/MagLevOld.hx:187: characters 17-57
					$val = \Reflect::getProperty($x, $field);
					#/src/maglev/MagLevOld.hx:188: characters 17-53
					$obj->set($field, $this->convertToMagLev($val));
				}
				#/src/maglev/MagLevOld.hx:190: characters 13-23
				return $obj;
			} else {
				#/src/maglev/MagLevOld.hx:193: characters 13-18
				throw Exception::thrown("convertToMagLev: unknown type");
			}
		}
	}

	/**
	 * @param string $event
	 * @param \Array_hx $args
	 * 
	 * @return void
	 */
	public function emit ($event, $args) {
		#/src/maglev/MagLevOld.hx:98: characters 9-52
		$myargs = new MagLevArray();
		#/src/maglev/MagLevOld.hx:99: lines 99-101
		$_g = 0;
		while ($_g < $args->length) {
			#/src/maglev/MagLevOld.hx:99: characters 14-17
			$arg = ($args->arr[$_g] ?? null);
			#/src/maglev/MagLevOld.hx:99: lines 99-101
			++$_g;
			#/src/maglev/MagLevOld.hx:100: characters 13-46
			$myargs->push($this->convertToMagLev($arg));
		}
		#/src/maglev/MagLevOld.hx:102: characters 3-34
		$this->maglev->emit($event, $myargs);
	}

	/**
	 * @param string $event
	 * @param \Closure $callback
	 * 
	 * @return void
	 */
	public function listen ($event, $callback) {
		#/src/maglev/MagLevOld.hx:81: lines 81-95
		$_gthis = $this;
		#/src/maglev/MagLevOld.hx:83: lines 83-92
		$mysub = function ($args) use (&$event, &$_gthis, &$callback) {
			#/src/maglev/MagLevOld.hx:84: characters 13-52
			$arr = new \Array_hx();
			#/src/maglev/MagLevOld.hx:85: characters 13-23
			$i = 0;
			#/src/maglev/MagLevOld.hx:86: lines 86-89
			while ($i < $args->size()) {
				#/src/maglev/MagLevOld.hx:87: characters 17-53
				$x = $_gthis->convertToHaxe($args->get($i));
				$arr->arr[$arr->length++] = $x;
				#/src/maglev/MagLevOld.hx:88: characters 17-20
				++$i;
			}
			#/src/maglev/MagLevOld.hx:90: characters 13-33
			$callback($event, $arr);
			#/src/maglev/MagLevOld.hx:91: characters 13-24
			return null;
		};
		#/src/maglev/MagLevOld.hx:93: characters 9-67
		$mycallback = new MagLevFunction($mysub);
		#/src/maglev/MagLevOld.hx:94: characters 9-46
		$this->maglev->listen($event, $mycallback);
	}

	/**
	 * @param string $method
	 * @param \Closure $callback
	 * 
	 * @return void
	 */
	public function register ($method, $callback) {
		#/src/maglev/MagLevOld.hx:53: lines 53-66
		$_gthis = $this;
		#/src/maglev/MagLevOld.hx:54: lines 54-63
		$myfunc = function ($args) use (&$_gthis, &$callback) {
			#/src/maglev/MagLevOld.hx:55: characters 13-51
			$arr = new \Array_hx();
			#/src/maglev/MagLevOld.hx:56: characters 13-23
			$i = 0;
			#/src/maglev/MagLevOld.hx:57: lines 57-60
			while ($i < $args->size()) {
				#/src/maglev/MagLevOld.hx:58: characters 17-53
				$x = $_gthis->convertToHaxe($args->get($i));
				$arr->arr[$arr->length++] = $x;
				#/src/maglev/MagLevOld.hx:59: characters 17-20
				++$i;
			}
			#/src/maglev/MagLevOld.hx:61: characters 13-67
			$result = $_gthis->convertToMagLev($callback($arr));
			#/src/maglev/MagLevOld.hx:62: characters 13-51
			return MagLevResult::fromResult($result);
		};
		#/src/maglev/MagLevOld.hx:64: characters 9-68
		$mycallback = new MagLevFunction($myfunc);
		#/src/maglev/MagLevOld.hx:65: characters 3-43
		$this->maglev->register($method, $mycallback);
	}
}

Boot::registerClass(MagLevOld::class, 'maglev.MagLevOld');
