<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace haxe\iterators;

use \php\_Boot\HxAnon;
use \php\Boot;

/**
 * This iterator can be used to iterate over char indexes and char codes in a string.
 * Note that char codes may differ across platforms because of different
 * internal encoding of strings in different runtimes.
 */
class StringKeyValueIterator {
	/**
	 * @var int
	 */
	public $offset;
	/**
	 * @var string
	 */
	public $s;

	/**
	 * Create a new `StringKeyValueIterator` over String `s`.
	 * 
	 * @param string $s
	 * 
	 * @return void
	 */
	public function __construct ($s) {
		#/opt/haxe/std/haxe/iterators/StringKeyValueIterator.hx:32: characters 15-16
		$this->offset = 0;
		#/opt/haxe/std/haxe/iterators/StringKeyValueIterator.hx:39: characters 3-13
		$this->s = $s;
	}

	/**
	 * See `KeyValueIterator.hasNext`
	 * 
	 * @return bool
	 */
	public function hasNext () {
		#/opt/haxe/std/haxe/iterators/StringKeyValueIterator.hx:46: characters 3-27
		return $this->offset < mb_strlen($this->s);
	}

	/**
	 * See `KeyValueIterator.next`
	 * 
	 * @return object
	 */
	public function next () {
		#/opt/haxe/std/haxe/iterators/StringKeyValueIterator.hx:53: characters 16-22
		$tmp = $this->offset;
		#/opt/haxe/std/haxe/iterators/StringKeyValueIterator.hx:53: characters 3-67
		return new HxAnon([
			"key" => $tmp,
			"value" => \StringTools::fastCodeAt($this->s, $this->offset++),
		]);
	}
}

Boot::registerClass(StringKeyValueIterator::class, 'haxe.iterators.StringKeyValueIterator');
