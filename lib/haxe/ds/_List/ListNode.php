<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace haxe\ds\_List;

use \php\Boot;

class ListNode {
	/**
	 * @var mixed
	 */
	public $item;
	/**
	 * @var ListNode
	 */
	public $next;

	/**
	 * @param mixed $item
	 * @param ListNode $next
	 * 
	 * @return void
	 */
	public function __construct ($item, $next) {
		#/opt/haxe/std/haxe/ds/List.hx:267: characters 3-19
		$this->item = $item;
		#/opt/haxe/std/haxe/ds/List.hx:268: characters 3-19
		$this->next = $next;
	}
}

Boot::registerClass(ListNode::class, 'haxe.ds._List.ListNode');
