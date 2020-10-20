<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;
use \maglev\_MagLevTypes\MagLevType_Impl_;

class MagLevResult {
	/**
	 * @var MagLevError
	 */
	public $error;
	/**
	 * @var MagLevAny
	 */
	public $result;

	/**
	 * @param MagLevError $err
	 * 
	 * @return MagLevResult
	 */
	public static function fromError ($err) {
		#/src/maglev/MagLevTypes.hx:52: characters 9-54
		$result = new MagLevResult();
		#/src/maglev/MagLevTypes.hx:53: characters 9-29
		$result->setError($err);
		#/src/maglev/MagLevTypes.hx:54: characters 9-22
		return $result;
	}

	/**
	 * @param MagLevAny $res
	 * 
	 * @return MagLevResult
	 */
	public static function fromResult ($res) {
		#/src/maglev/MagLevTypes.hx:47: characters 9-54
		$result = new MagLevResult();
		#/src/maglev/MagLevTypes.hx:48: characters 9-30
		$result->setResult($res);
		#/src/maglev/MagLevTypes.hx:49: characters 9-22
		return $result;
	}

	/**
	 * @return void
	 */
	public function __construct () {
		#/src/maglev/MagLevTypes.hx:58: characters 9-34
		$this->result = new MagLevNull();
		#/src/maglev/MagLevTypes.hx:59: characters 9-21
		$this->error = null;
	}

	/**
	 * @return MagLevError
	 */
	public function getError () {
		#/src/maglev/MagLevTypes.hx:72: characters 9-21
		return $this->error;
	}

	/**
	 * @return MagLevAny
	 */
	public function getResult () {
		#/src/maglev/MagLevTypes.hx:65: characters 9-22
		return $this->result;
	}

	/**
	 * @return int
	 */
	public function getType () {
		#/src/maglev/MagLevTypes.hx:79: characters 9-44
		return MagLevType_Impl_::$MagLevType_Result;
	}

	/**
	 * @param MagLevResult $other
	 * 
	 * @return bool
	 */
	public function isEqual ($other) {
		#/src/maglev/MagLevTypes.hx:83: lines 83-93
		if ($this->isError() === $other->isError()) {
			#/src/maglev/MagLevTypes.hx:85: lines 85-89
			if ($this->isError()) {
				#/src/maglev/MagLevTypes.hx:86: characters 17-60
				return $this->getError()->isEqual($other->getError());
			} else {
				#/src/maglev/MagLevTypes.hx:88: characters 17-62
				return $this->getResult()->isEqual($other->getResult());
			}
		} else {
			#/src/maglev/MagLevTypes.hx:92: characters 13-25
			return false;
		}
	}

	/**
	 * @return bool
	 */
	public function isError () {
		#/src/maglev/MagLevTypes.hx:62: characters 9-30
		return $this->result === null;
	}

	/**
	 * @param MagLevError $err
	 * 
	 * @return void
	 */
	public function setError ($err) {
		#/src/maglev/MagLevTypes.hx:75: characters 9-22
		$this->result = null;
		#/src/maglev/MagLevTypes.hx:76: characters 9-20
		$this->error = $err;
	}

	/**
	 * @param MagLevAny $res
	 * 
	 * @return void
	 */
	public function setResult ($res) {
		#/src/maglev/MagLevTypes.hx:68: characters 9-21
		$this->result = $res;
		#/src/maglev/MagLevTypes.hx:69: characters 9-21
		$this->error = null;
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLevTypes.hx:96: characters 9-33
		$res = "null";
		#/src/maglev/MagLevTypes.hx:97: characters 9-33
		$err = "null";
		#/src/maglev/MagLevTypes.hx:98: lines 98-102
		if ($this->isError()) {
			#/src/maglev/MagLevTypes.hx:99: characters 13-45
			$err = $this->error->toJson()->getString();
		} else {
			#/src/maglev/MagLevTypes.hx:101: characters 13-46
			$res = $this->result->toJson()->getString();
		}
		#/src/maglev/MagLevTypes.hx:103: characters 9-81
		return new MagLevString("{\"result\": " . ($res??'null') . ", \"error\": " . ($err??'null') . "}");
	}
}

Boot::registerClass(MagLevResult::class, 'maglev.MagLevResult');
