<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;
use \haxe\Exception;
use \haxe\ds\StringMap;

class MagLev {
	/**
	 * @var StringMap
	 */
	static public $_instances;

	/**
	 * @var StringMap
	 */
	public $_listeners;
	/**
	 * @var StringMap
	 */
	public $_methods;

	/**
	 * @param string $key
	 * 
	 * @return MagLev
	 */
	public static function getInstance ($key) {
		#/src/maglev/MagLev.hx:45: lines 45-47
		if (!array_key_exists($key, MagLev::$_instances->data)) {
			#/src/maglev/MagLev.hx:46: characters 5-35
			$this1 = MagLev::$_instances;
			$v = new MagLev();
			$this1->data[$key] = $v;
		}
		#/src/maglev/MagLev.hx:48: characters 10-25
		return (MagLev::$_instances->data[$key] ?? null);
	}

	/**
	 * @return void
	 */
	public function __construct () {
		#/src/maglev/MagLev.hx:39: characters 63-112
		$this->_listeners = new StringMap();
		#/src/maglev/MagLev.hx:38: characters 45-78
		$this->_methods = new StringMap();
	}

	/**
	 * @param string $method
	 * @param \Array_hx $args
	 * 
	 * @return mixed
	 */
	public function call ($method, $args) {
		#/src/maglev/MagLev.hx:56: lines 56-60
		if (array_key_exists($method, $this->_methods->data)) {
			#/src/maglev/MagLev.hx:57: characters 7-36
			return ($this->_methods->data[$method] ?? null)($args);
		} else {
			#/src/maglev/MagLev.hx:59: characters 4-9
			throw Exception::thrown("Method '" . ($method??'null') . "' not registered");
		}
	}

	/**
	 * @param string $event
	 * @param \Array_hx $args
	 * 
	 * @return void
	 */
	public function emit ($event, $args) {
		#/src/maglev/MagLev.hx:72: lines 72-77
		if (array_key_exists($event, $this->_listeners->data)) {
			#/src/maglev/MagLev.hx:73: characters 4-38
			$listeners = ($this->_listeners->data[$event] ?? null);
			#/src/maglev/MagLev.hx:74: lines 74-76
			$_g = 0;
			while ($_g < $listeners->length) {
				#/src/maglev/MagLev.hx:74: characters 8-16
				$listener = ($listeners->arr[$_g] ?? null);
				#/src/maglev/MagLev.hx:74: lines 74-76
				++$_g;
				#/src/maglev/MagLev.hx:75: characters 5-26
				$listener($event, $args);
			}
		}
	}

	/**
	 * @param string $event
	 * @param \Closure $callback
	 * 
	 * @return void
	 */
	public function listen ($event, $callback) {
		#/src/maglev/MagLev.hx:65: lines 65-67
		if (!array_key_exists($event, $this->_listeners->data)) {
			#/src/maglev/MagLev.hx:66: characters 4-61
			$this1 = $this->_listeners;
			$v = new \Array_hx();
			$this1->data[$event] = $v;
		}
		#/src/maglev/MagLev.hx:68: characters 3-35
		$_this = ($this->_listeners->data[$event] ?? null);
		$_this->arr[$_this->length++] = $callback;
	}

	/**
	 * @param string $method
	 * @param \Closure $callback
	 * 
	 * @return void
	 */
	public function register ($method, $callback) {
		#/src/maglev/MagLev.hx:52: characters 3-30
		$this->_methods->data[$method] = $callback;
	}

	/**
	 * @internal
	 * @access private
	 */
	static public function __hx__init ()
	{
		static $called = false;
		if ($called) return;
		$called = true;


		self::$_instances = new StringMap();
	}
}

Boot::registerClass(MagLev::class, 'maglev.MagLev');
MagLev::__hx__init();
