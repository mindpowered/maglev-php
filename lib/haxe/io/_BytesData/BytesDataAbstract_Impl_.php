<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace haxe\io\_BytesData;

use \php\Boot;

final class BytesDataAbstract_Impl_ {

	/**
	 * @param int $length
	 * 
	 * @return Container
	 */
	public static function alloc ($length) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:42: characters 3-50
		return new Container(str_repeat(chr(0), $length));
	}

	/**
	 * @param Container $this
	 * @param int $pos
	 * @param Container $src
	 * @param int $srcpos
	 * @param int $len
	 * 
	 * @return void
	 */
	public static function blit ($this1, $pos, $src, $srcpos, $len) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:68: characters 3-122
		$this1->s = ((substr($this1->s, 0, $pos) . substr($src->s, $srcpos, $len)) . substr($this1->s, $pos + $len));
	}

	/**
	 * @param Container $this
	 * @param Container $other
	 * 
	 * @return int
	 */
	public static function compare ($this1, $other) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:56: characters 10-57
		return ($this1->s <=> $other->s);
	}

	/**
	 * @param mixed $s
	 * 
	 * @return Container
	 */
	public static function fromNativeString ($s) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:77: characters 3-26
		return new Container($s);
	}

	/**
	 * @param string $s
	 * 
	 * @return Container
	 */
	public static function fromString ($s) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:87: characters 3-26
		return new Container($s);
	}

	/**
	 * @param Container $this
	 * @param int $pos
	 * 
	 * @return int
	 */
	public static function get ($this1, $pos) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:47: characters 3-33
		return ord($this1->s[$pos]);
	}

	/**
	 * @param Container $this
	 * @param int $pos
	 * @param int $len
	 * 
	 * @return string
	 */
	public static function getString ($this1, $pos, $len) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:60: characters 3-41
		return substr($this1->s, $pos, $len);
	}

	/**
	 * @param Container $this
	 * 
	 * @return int
	 */
	public static function get_length ($this1) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:72: characters 3-31
		return strlen($this1->s);
	}

	/**
	 * @param Container $this
	 * @param int $index
	 * @param int $val
	 * 
	 * @return void
	 */
	public static function set ($this1, $index, $val) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:52: characters 3-34
		$this1->s[$index] = chr($val);
	}

	/**
	 * @param Container $this
	 * @param int $pos
	 * @param int $len
	 * 
	 * @return Container
	 */
	public static function sub ($this1, $pos, $len) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:64: characters 3-52
		return new Container(substr($this1->s, $pos, $len));
	}

	/**
	 * @param Container $this
	 * 
	 * @return mixed
	 */
	public static function toNativeString ($this1) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:82: characters 3-16
		return $this1->s;
	}

	/**
	 * @param Container $this
	 * 
	 * @return string
	 */
	public static function toString ($this1) {
		#/opt/haxe/std/php/_std/haxe/io/BytesData.hx:92: characters 3-16
		return $this1->s;
	}
}

Boot::registerClass(BytesDataAbstract_Impl_::class, 'haxe.io._BytesData.BytesDataAbstract_Impl_');
Boot::registerGetters('haxe\\io\\_BytesData\\BytesDataAbstract_Impl_', [
	'length' => true
]);
