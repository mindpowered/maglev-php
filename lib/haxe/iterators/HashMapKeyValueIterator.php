<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace haxe\iterators;

use \php\_Boot\HxAnon;
use \php\Boot;
use \haxe\ds\_HashMap\HashMapData;
use \php\_NativeIndexedArray\NativeIndexedArrayIterator;

class HashMapKeyValueIterator {
	/**
	 * @var object
	 */
	public $keys;
	/**
	 * @var HashMapData
	 */
	public $map;

	/**
	 * @param HashMapData $map
	 * 
	 * @return void
	 */
	public function __construct ($map) {
		#/opt/haxe/std/haxe/iterators/HashMapKeyValueIterator.hx:10: characters 3-17
		$this->map = $map;
		#/opt/haxe/std/haxe/iterators/HashMapKeyValueIterator.hx:11: characters 3-25
		$this->keys = new NativeIndexedArrayIterator(array_values($map->keys->data));
	}

	/**
	 * See `Iterator.hasNext`
	 * 
	 * @return bool
	 */
	public function hasNext () {
		#/opt/haxe/std/haxe/iterators/HashMapKeyValueIterator.hx:18: characters 3-24
		return $this->keys->hasNext();
	}

	/**
	 * See `Iterator.next`
	 * 
	 * @return object
	 */
	public function next () {
		#/opt/haxe/std/haxe/iterators/HashMapKeyValueIterator.hx:25: characters 3-25
		$key = $this->keys->next();
		#/opt/haxe/std/haxe/iterators/HashMapKeyValueIterator.hx:26: characters 18-30
		$_this = $this->map->values;
		$key1 = $key->hashCode();
		#/opt/haxe/std/haxe/iterators/HashMapKeyValueIterator.hx:26: characters 3-41
		return new HxAnon([
			"value" => ($_this->data[$key1] ?? null),
			"key" => $key,
		]);
	}
}

Boot::registerClass(HashMapKeyValueIterator::class, 'haxe.iterators.HashMapKeyValueIterator');