<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;
use \haxe\ds\ObjectMap;
use \php\Lib;
use \haxe\ds\IntMap;
use \php\_Boot\HxClosure;
use \haxe\ds\StringMap;
use \haxe\ds\EnumValueMap;
use \php\_NativeIndexedArray\NativeIndexedArrayIterator;

/**
 * Wrapper for MagLev to use native PHP data types eg. NativeArray
 * (use this for php Infra components, do not use for Logic components)
 */
class MagLevPhp {
	/**
	 * @var MagLevOld
	 */
	public $maglev;

	/**
	 * @param mixed $phpKey
	 * 
	 * @return MagLevPhp
	 */
	public static function getInstance ($phpKey) {
		#/src/maglev/MagLevPhp.hx:25: characters 5-43
		$key = Boot::typedCast(Boot::getClass('String'), $phpKey);
		#/src/maglev/MagLevPhp.hx:26: characters 5-53
		return new MagLevPhp(MagLevOld::getInstance($key));
	}

	/**
	 * @param MagLevOld $maglev
	 * 
	 * @return void
	 */
	public function __construct ($maglev) {
		#/src/maglev/MagLevPhp.hx:20: characters 5-25
		$this->maglev = $maglev;
	}

	/**
	 * @param mixed $phpMethod
	 * @param mixed $phpArgs
	 * @param \Closure $phpCallback
	 * 
	 * @return void
	 */
	public function call ($phpMethod, $phpArgs, $phpCallback) {
		#/src/maglev/MagLevPhp.hx:41: lines 41-49
		$_gthis = $this;
		#/src/maglev/MagLevPhp.hx:43: characters 5-42
		$method = Boot::typedCast(Boot::getClass('String'), $phpMethod);
		#/src/maglev/MagLevPhp.hx:44: characters 5-59
		$haxeArgs = $this->convertToHaxe($phpArgs);
		#/src/maglev/MagLevPhp.hx:45: lines 45-48
		$this->maglev->call($method, $haxeArgs, function ($haxeResult) use (&$_gthis, &$phpCallback) {
			#/src/maglev/MagLevPhp.hx:46: characters 9-59
			$phpResult = $_gthis->convertToPhp($haxeResult);
			#/src/maglev/MagLevPhp.hx:47: characters 9-31
			$phpCallback($phpResult);
		});
	}

	/**
	 * @param mixed $data
	 * 
	 * @return mixed
	 */
	public function convertToHaxe ($data) {
		#/src/maglev/MagLevPhp.hx:127: lines 127-173
		$_gthis = $this;
		#/src/maglev/MagLevPhp.hx:130: characters 5-23
		$result = $data;
		#/src/maglev/MagLevPhp.hx:132: lines 132-171
		if (is_array($data)) {
			#/src/maglev/MagLevPhp.hx:134: characters 7-49
			$haxeArray = \Array_hx::wrap($data);
			#/src/maglev/MagLevPhp.hx:135: characters 7-76
			$haxeHash = Lib::hashOfAssociativeArray($data);
			#/src/maglev/MagLevPhp.hx:137: lines 137-149
			if (Boot::equal(array_values($data), $data)) {
				#/src/maglev/MagLevPhp.hx:138: characters 9-33
				$ret = new \Array_hx();
				#/src/maglev/MagLevPhp.hx:139: lines 139-141
				$_g = 0;
				while ($_g < $haxeArray->length) {
					#/src/maglev/MagLevPhp.hx:139: characters 14-18
					$item = ($haxeArray->arr[$_g] ?? null);
					#/src/maglev/MagLevPhp.hx:139: lines 139-141
					++$_g;
					#/src/maglev/MagLevPhp.hx:140: characters 11-40
					$x = $this->convertToHaxe($item);
					$ret->arr[$ret->length++] = $x;
				}
				#/src/maglev/MagLevPhp.hx:142: characters 9-19
				return $ret;
			} else {
				#/src/maglev/MagLevPhp.hx:144: characters 9-59
				$ret = new StringMap();
				#/src/maglev/MagLevPhp.hx:145: characters 22-37
				$item = new NativeIndexedArrayIterator(array_values(array_map("strval", array_keys($haxeHash->data))));
				while ($item->hasNext()) {
					#/src/maglev/MagLevPhp.hx:145: lines 145-147
					$item1 = $item->next();
					#/src/maglev/MagLevPhp.hx:146: characters 11-55
					$value = $this->convertToHaxe(($haxeHash->data[$item1] ?? null));
					$ret->data[$item1] = $value;
				}
				#/src/maglev/MagLevPhp.hx:148: characters 9-19
				return $ret;
			}
		} else if (is_string($data)) {
			#/src/maglev/MagLevPhp.hx:151: characters 7-36
			$haxeString = $data;
			#/src/maglev/MagLevPhp.hx:152: characters 7-26
			$result = $haxeString;
		} else if (is_callable($data)) {
			#/src/maglev/MagLevPhp.hx:155: lines 155-169
			$f = function () use (&$data, &$_gthis) {
				#/src/maglev/MagLevPhp.hx:157: characters 9-64
				$nativeArrayOfHaxeArgs = func_get_args();
				#/src/maglev/MagLevPhp.hx:158: characters 9-67
				$haxeArgs = \Array_hx::wrap($nativeArrayOfHaxeArgs);
				#/src/maglev/MagLevPhp.hx:160: characters 9-48
				$haxeArrayOfPhpArgs = new \Array_hx();
				#/src/maglev/MagLevPhp.hx:161: lines 161-163
				$_g = 0;
				while ($_g < $haxeArgs->length) {
					#/src/maglev/MagLevPhp.hx:161: characters 14-21
					$haxeArg = ($haxeArgs->arr[$_g] ?? null);
					#/src/maglev/MagLevPhp.hx:161: lines 161-163
					++$_g;
					#/src/maglev/MagLevPhp.hx:162: characters 11-57
					$x = $_gthis->convertToPhp($haxeArg);
					$haxeArrayOfPhpArgs->arr[$haxeArrayOfPhpArgs->length++] = $x;
				}
				#/src/maglev/MagLevPhp.hx:164: characters 9-62
				$phpArgs = $haxeArrayOfPhpArgs->arr;
				#/src/maglev/MagLevPhp.hx:165: characters 9-72
				$phpResult = call_user_func_array($data, $phpArgs);
				#/src/maglev/MagLevPhp.hx:167: characters 9-51
				$haxeResult = $_gthis->convertToHaxe($phpResult);
				#/src/maglev/MagLevPhp.hx:168: characters 9-26
				return $haxeResult;
			};
			#/src/maglev/MagLevPhp.hx:170: characters 7-17
			$result = $f;
		}
		#/src/maglev/MagLevPhp.hx:172: characters 5-18
		return $result;
	}

	/**
	 * @param mixed $data
	 * 
	 * @return mixed
	 */
	public function convertToPhp ($data) {
		#/src/maglev/MagLevPhp.hx:70: lines 70-125
		$_gthis = $this;
		#/src/maglev/MagLevPhp.hx:73: characters 5-23
		$result = $data;
		#/src/maglev/MagLevPhp.hx:75: lines 75-123
		if (($data instanceof \Array_hx)) {
			#/src/maglev/MagLevPhp.hx:76: characters 7-38
			$original = $data;
			#/src/maglev/MagLevPhp.hx:77: characters 7-31
			$arr = new \Array_hx();
			#/src/maglev/MagLevPhp.hx:78: characters 19-38
			$_g_current = 0;
			$_g_array = $original;
			#/src/maglev/MagLevPhp.hx:78: lines 78-80
			while ($_g_current < $_g_array->length) {
				$item = ($_g_array->arr[$_g_current++] ?? null);
				#/src/maglev/MagLevPhp.hx:79: characters 9-37
				$x = $this->convertToPhp($item);
				$arr->arr[$arr->length++] = $x;
			}
			#/src/maglev/MagLevPhp.hx:81: characters 7-13
			$result = $arr->arr;
		} else if (($data instanceof StringMap) || ($data instanceof IntMap) || ($data instanceof EnumValueMap) || ($data instanceof ObjectMap)) {
			#/src/maglev/MagLevPhp.hx:87: characters 7-61
			$original = $data;
			#/src/maglev/MagLevPhp.hx:88: characters 7-58
			$hash = new StringMap();
			#/src/maglev/MagLevPhp.hx:89: characters 19-34
			$item = $original->keys();
			while ($item->hasNext()) {
				#/src/maglev/MagLevPhp.hx:89: lines 89-91
				$item1 = $item->next();
				#/src/maglev/MagLevPhp.hx:90: characters 9-57
				$value = $this->convertToPhp($original->get($item1));
				$hash->data[$item1] = $value;
			}
			#/src/maglev/MagLevPhp.hx:92: characters 7-13
			$result = $hash->data;
		} else if (is_string($data)) {
			#/src/maglev/MagLevPhp.hx:95: characters 7-45
			$phpString = $data;
			#/src/maglev/MagLevPhp.hx:96: characters 7-13
			$result = $phpString;
		} else {
			#/src/maglev/MagLevPhp.hx:98: characters 14-38
			$f = $data;
			#/src/maglev/MagLevPhp.hx:98: lines 98-123
			if (($f instanceof \Closure) || ($f instanceof HxClosure)) {
				#/src/maglev/MagLevPhp.hx:100: lines 100-112
				$f = function () use (&$data, &$_gthis) {
					#/src/maglev/MagLevPhp.hx:102: characters 9-50
					$phpArgs = func_get_args();
					#/src/maglev/MagLevPhp.hx:104: characters 9-47
					$haxeArgs = $_gthis->convertToHaxe($phpArgs);
					#/src/maglev/MagLevPhp.hx:106: characters 9-71
					$phpArrayContainingHaxeArgs = $haxeArgs->arr;
					#/src/maglev/MagLevPhp.hx:108: characters 9-92
					$haxeResult = call_user_func_array($data, $phpArrayContainingHaxeArgs);
					#/src/maglev/MagLevPhp.hx:110: characters 9-50
					$phpResult = $_gthis->convertToPhp($haxeResult);
					#/src/maglev/MagLevPhp.hx:111: characters 9-25
					return $phpResult;
				};
				#/src/maglev/MagLevPhp.hx:113: characters 7-13
				$result = $f;
			} else if (\Reflect::isObject($data)) {
				#/src/maglev/MagLevPhp.hx:116: characters 9-60
				$hash = new StringMap();
				#/src/maglev/MagLevPhp.hx:117: characters 9-29
				$original = $data;
				#/src/maglev/MagLevPhp.hx:118: lines 118-121
				$_g = 0;
				$_g1 = \Reflect::fields($original);
				while ($_g < $_g1->length) {
					#/src/maglev/MagLevPhp.hx:118: characters 14-19
					$field = ($_g1->arr[$_g] ?? null);
					#/src/maglev/MagLevPhp.hx:118: lines 118-121
					++$_g;
					#/src/maglev/MagLevPhp.hx:119: characters 13-60
					$val = \Reflect::getProperty($original, $field);
					#/src/maglev/MagLevPhp.hx:120: characters 13-30
					$hash->data[$field] = $val;
				}
				#/src/maglev/MagLevPhp.hx:122: characters 9-15
				$result = $this->convertToPhp($hash);
			}
		}
		#/src/maglev/MagLevPhp.hx:124: characters 5-18
		return $result;
	}

	/**
	 * @param \Array_hx $arr
	 * 
	 * @return \Array_hx
	 */
	public function dynamicArrayToAnyArray ($arr) {
		#/src/maglev/MagLevPhp.hx:176: characters 5-33
		$results = new \Array_hx();
		#/src/maglev/MagLevPhp.hx:177: lines 177-179
		$_g = 0;
		while ($_g < $arr->length) {
			#/src/maglev/MagLevPhp.hx:177: characters 10-11
			$a = ($arr->arr[$_g] ?? null);
			#/src/maglev/MagLevPhp.hx:177: lines 177-179
			++$_g;
			#/src/maglev/MagLevPhp.hx:178: characters 7-22
			$results->arr[$results->length++] = $a;
		}
		#/src/maglev/MagLevPhp.hx:180: characters 5-19
		return $results;
	}

	/**
	 * @param mixed $event
	 * @param mixed $phpArgs
	 * 
	 * @return void
	 */
	public function emit ($event, $phpArgs) {
		#/src/maglev/MagLevPhp.hx:65: characters 5-84
		$haxeArgs = $this->dynamicArrayToAnyArray(\Array_hx::wrap($phpArgs));
		#/src/maglev/MagLevPhp.hx:66: characters 5-40
		$eventStr = Boot::typedCast(Boot::getClass('String'), $event);
		#/src/maglev/MagLevPhp.hx:67: characters 5-41
		$this->maglev->emit($eventStr, $haxeArgs);
	}

	/**
	 * @param mixed $phpEvent
	 * @param \Closure $phpCallback
	 * 
	 * @return void
	 */
	public function listen ($phpEvent, $phpCallback) {
		#/src/maglev/MagLevPhp.hx:54: characters 5-47
		$event = Boot::typedCast(Boot::getClass('String'), $phpEvent);
		#/src/maglev/MagLevPhp.hx:55: lines 55-58
		$haxeCallback = function ($event, $haxeArgs) use (&$phpCallback) {
			#/src/maglev/MagLevPhp.hx:56: characters 7-50
			$phpArgs = $haxeArgs->arr;
			#/src/maglev/MagLevPhp.hx:57: characters 7-34
			$phpCallback($event, $phpArgs);
		};
		#/src/maglev/MagLevPhp.hx:59: characters 5-44
		$this->maglev->listen($event, $haxeCallback);
	}

	/**
	 * @param mixed $phpMethod
	 * @param \Closure $phpCallback
	 * 
	 * @return void
	 */
	public function register ($phpMethod, $phpCallback) {
		#/src/maglev/MagLevPhp.hx:29: lines 29-39
		$_gthis = $this;
		#/src/maglev/MagLevPhp.hx:31: lines 31-36
		$haxeCallback = function ($haxeArgs) use (&$_gthis, &$phpCallback) {
			#/src/maglev/MagLevPhp.hx:32: characters 7-49
			$phpArgs = $_gthis->convertToPhp($haxeArgs);
			#/src/maglev/MagLevPhp.hx:33: characters 7-48
			$phpResult = $phpCallback($phpArgs);
			#/src/maglev/MagLevPhp.hx:34: characters 7-58
			$haxeResult = $_gthis->convertToHaxe($phpResult);
			#/src/maglev/MagLevPhp.hx:35: characters 7-24
			return $haxeResult;
		};
		#/src/maglev/MagLevPhp.hx:37: characters 5-49
		$method = Boot::typedCast(Boot::getClass('String'), $phpMethod);
		#/src/maglev/MagLevPhp.hx:38: characters 5-47
		$this->maglev->register($method, $haxeCallback);
	}
}

Boot::registerClass(MagLevPhp::class, 'maglev.MagLevPhp');
