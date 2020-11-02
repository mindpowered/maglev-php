<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;
use \haxe\Exception;

class MagLevResult {
	/**
	 * @var \Array_hx
	 */
	public $accepts;
	/**
	 * @var bool
	 */
	public $async;
	/**
	 * @var bool
	 */
	public $complete;
	/**
	 * @var MagLevError
	 */
	public $error;
	/**
	 * @var \Array_hx
	 */
	public $rejects;
	/**
	 * @var MagLevAny
	 */
	public $result;

	/**
	 * @return MagLevResult
	 */
	public static function createAsync () {
		#/src/maglev/MagLev.hx:116: characters 9-58
		$result = new MagLevResult(true);
		#/src/maglev/MagLev.hx:117: characters 9-22
		return $result;
	}

	/**
	 * @param MagLevError $err
	 * 
	 * @return MagLevResult
	 */
	public static function fromError ($err) {
		#/src/maglev/MagLev.hx:111: characters 9-59
		$result = new MagLevResult(false);
		#/src/maglev/MagLev.hx:112: characters 9-29
		$result->setError($err);
		#/src/maglev/MagLev.hx:113: characters 9-22
		return $result;
	}

	/**
	 * @param MagLevAny $res
	 * 
	 * @return MagLevResult
	 */
	public static function fromResult ($res) {
		#/src/maglev/MagLev.hx:106: characters 9-59
		$result = new MagLevResult(false);
		#/src/maglev/MagLev.hx:107: characters 9-30
		$result->setResult($res);
		#/src/maglev/MagLev.hx:108: characters 9-22
		return $result;
	}

	/**
	 * @return int
	 */
	public static function getStaticType () {
		#/src/maglev/MagLev.hx:187: characters 9-19
		return 110;
	}

	/**
	 * @param bool $async
	 * 
	 * @return void
	 */
	public function __construct ($async) {
		#/src/maglev/MagLev.hx:120: characters 9-27
		$this->async = $async;
		#/src/maglev/MagLev.hx:121: characters 9-27
		$this->result = null;
		#/src/maglev/MagLev.hx:122: characters 9-26
		$this->error = null;
		#/src/maglev/MagLev.hx:123: characters 9-30
		$this->complete = false;
		#/src/maglev/MagLev.hx:124: characters 9-60
		$this->accepts = new \Array_hx();
		#/src/maglev/MagLev.hx:125: characters 9-62
		$this->rejects = new \Array_hx();
	}

	/**
	 * @return MagLevError
	 */
	public function getError () {
		#/src/maglev/MagLev.hx:148: characters 9-29
		if (!$this->complete) {
			#/src/maglev/MagLev.hx:148: characters 24-29
			throw Exception::thrown("getError(): Future result not complete");
		}
		#/src/maglev/MagLev.hx:149: characters 9-21
		return $this->error;
	}

	/**
	 * @return MagLevAny
	 */
	public function getResult () {
		#/src/maglev/MagLev.hx:138: characters 9-29
		if (!$this->complete) {
			#/src/maglev/MagLev.hx:138: characters 24-29
			throw Exception::thrown("getResult(): Future result not complete");
		}
		#/src/maglev/MagLev.hx:139: characters 9-22
		return $this->result;
	}

	/**
	 * @return int
	 */
	public function getType () {
		#/src/maglev/MagLev.hx:184: characters 9-19
		return 110;
	}

	/**
	 * @return bool
	 */
	public function isAsync () {
		#/src/maglev/MagLev.hx:128: characters 9-21
		return $this->async;
	}

	/**
	 * @return bool
	 */
	public function isComplete () {
		#/src/maglev/MagLev.hx:131: characters 9-24
		return $this->complete;
	}

	/**
	 * @param MagLevResult $other
	 * 
	 * @return bool
	 */
	public function isEqual ($other) {
		#/src/maglev/MagLev.hx:191: lines 191-201
		if ($this->isError() === $other->isError()) {
			#/src/maglev/MagLev.hx:193: lines 193-197
			if ($this->isError()) {
				#/src/maglev/MagLev.hx:194: characters 17-60
				return $this->getError()->isEqual($other->getError());
			} else {
				#/src/maglev/MagLev.hx:196: characters 17-62
				return $this->getResult()->isEqual($other->getResult());
			}
		} else {
			#/src/maglev/MagLev.hx:200: characters 13-25
			return false;
		}
	}

	/**
	 * @return bool
	 */
	public function isError () {
		#/src/maglev/MagLev.hx:134: characters 9-29
		if (!$this->complete) {
			#/src/maglev/MagLev.hx:134: characters 24-29
			throw Exception::thrown("isError(): Future result not complete");
		}
		#/src/maglev/MagLev.hx:135: characters 9-30
		return $this->result === null;
	}

	/**
	 * @param \Closure $callback
	 * 
	 * @return MagLevResult
	 */
	public function onError ($callback) {
		#/src/maglev/MagLev.hx:171: characters 9-62
		$future = MagLevResult::createAsync();
		#/src/maglev/MagLev.hx:172: lines 172-179
		$reject = function ($error) use (&$future, &$callback) {
			#/src/maglev/MagLev.hx:173: characters 13-52
			$ret = $callback($error);
			#/src/maglev/MagLev.hx:174: lines 174-177
			$ret->onError(function ($error2) use (&$future) {
				#/src/maglev/MagLev.hx:175: characters 17-40
				$future->setError($error2);
				#/src/maglev/MagLev.hx:176: characters 17-68
				return MagLevResult::fromResult(MagLevNull::create());
			});
			#/src/maglev/MagLev.hx:178: characters 13-64
			return MagLevResult::fromResult(MagLevNull::create());
		};
		#/src/maglev/MagLev.hx:180: characters 9-34
		$_this = $this->rejects;
		$_this->arr[$_this->length++] = $reject;
		#/src/maglev/MagLev.hx:181: characters 9-22
		return $future;
	}

	/**
	 * @param \Closure $callback
	 * 
	 * @return MagLevResult
	 */
	public function onResult ($callback) {
		#/src/maglev/MagLev.hx:158: characters 9-62
		$future = MagLevResult::createAsync();
		#/src/maglev/MagLev.hx:159: lines 159-166
		$accept = function ($result) use (&$future, &$callback) {
			#/src/maglev/MagLev.hx:160: characters 13-53
			$ret = $callback($result);
			#/src/maglev/MagLev.hx:161: lines 161-164
			$ret->onResult(function ($result2) use (&$future) {
				#/src/maglev/MagLev.hx:162: characters 17-42
				$future->setResult($result2);
				#/src/maglev/MagLev.hx:163: characters 17-68
				return MagLevResult::fromResult(MagLevNull::create());
			});
			#/src/maglev/MagLev.hx:165: characters 13-64
			return MagLevResult::fromResult(MagLevNull::create());
		};
		#/src/maglev/MagLev.hx:167: characters 9-34
		$_this = $this->accepts;
		$_this->arr[$_this->length++] = $accept;
		#/src/maglev/MagLev.hx:168: characters 9-22
		return $future;
	}

	/**
	 * @param MagLevError $err
	 * 
	 * @return void
	 */
	public function setError ($err) {
		#/src/maglev/MagLev.hx:152: characters 9-28
		if ($this->complete) {
			#/src/maglev/MagLev.hx:152: characters 23-28
			throw Exception::thrown("setError(): Result was already complete");
		}
		#/src/maglev/MagLev.hx:153: characters 9-22
		$this->result = null;
		#/src/maglev/MagLev.hx:154: characters 9-20
		$this->error = $err;
		#/src/maglev/MagLev.hx:155: characters 9-24
		$this->complete = true;
	}

	/**
	 * @param MagLevAny $res
	 * 
	 * @return void
	 */
	public function setResult ($res) {
		#/src/maglev/MagLev.hx:142: characters 9-28
		if ($this->complete) {
			#/src/maglev/MagLev.hx:142: characters 23-28
			throw Exception::thrown("setResult(): Result was already complete");
		}
		#/src/maglev/MagLev.hx:143: characters 9-21
		$this->result = $res;
		#/src/maglev/MagLev.hx:144: characters 9-21
		$this->error = null;
		#/src/maglev/MagLev.hx:145: characters 9-24
		$this->complete = true;
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLev.hx:204: characters 9-33
		$res = "null";
		#/src/maglev/MagLev.hx:205: characters 9-33
		$err = "null";
		#/src/maglev/MagLev.hx:206: lines 206-210
		if ($this->isError()) {
			#/src/maglev/MagLev.hx:207: characters 13-45
			$err = $this->error->toJson()->getString();
		} else {
			#/src/maglev/MagLev.hx:209: characters 13-46
			$res = $this->result->toJson()->getString();
		}
		#/src/maglev/MagLev.hx:211: characters 9-81
		return new MagLevString("{\"result\": " . ($res??'null') . ", \"error\": " . ($err??'null') . "}");
	}
}

Boot::registerClass(MagLevResult::class, 'maglev.MagLevResult');
