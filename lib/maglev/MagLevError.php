<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;

class MagLevError {
	/**
	 * @var MagLevNumber
	 */
	public $code;
	/**
	 * @var MagLevAny
	 */
	public $data;
	/**
	 * @var MagLevString
	 */
	public $message;

	/**
	 * @param MagLevNumber $code
	 * @param MagLevString $message
	 * @param MagLevAny $data
	 * 
	 * @return void
	 */
	public function __construct ($code, $message, $data) {
		#/src/maglev/MagLevTypes.hx:114: characters 9-25
		$this->code = $code;
		#/src/maglev/MagLevTypes.hx:115: characters 9-31
		$this->message = $message;
		#/src/maglev/MagLevTypes.hx:116: characters 9-25
		$this->data = $data;
	}

	/**
	 * @param int $code
	 * @param string $message
	 * @param MagLevAny $data
	 * 
	 * @return MagLevError
	 */
	public function create ($code, $message, $data) {
		#/src/maglev/MagLevTypes.hx:109: characters 9-44
		$code2 = new MagLevNumber($code);
		#/src/maglev/MagLevTypes.hx:110: characters 9-50
		$message2 = new MagLevString($message);
		#/src/maglev/MagLevTypes.hx:111: characters 9-54
		return new MagLevError($code2, $message2, $data);
	}

	/**
	 * @return int
	 */
	public function getCode () {
		#/src/maglev/MagLevTypes.hx:119: characters 9-29
		return $this->code->getInt();
	}

	/**
	 * @return MagLevAny
	 */
	public function getData () {
		#/src/maglev/MagLevTypes.hx:125: characters 9-20
		return $this->data;
	}

	/**
	 * @return string
	 */
	public function getMessage () {
		#/src/maglev/MagLevTypes.hx:122: characters 9-35
		return $this->message->getString();
	}

	/**
	 * @return MagLevType
	 */
	public function getType () {
		#/src/maglev/MagLevTypes.hx:128: characters 9-32
		return MagLevType::MagLevType_Error();
	}

	/**
	 * @param MagLevError $other
	 * 
	 * @return bool
	 */
	public function isEqual ($other) {
		#/src/maglev/MagLevTypes.hx:132: characters 9-30
		$same = true;
		#/src/maglev/MagLevTypes.hx:133: characters 24-71
		$same = $same && $this->code->isEqual(new MagLevNumber($other->getCode()));
		#/src/maglev/MagLevTypes.hx:134: characters 24-77
		$same = $same && $this->message->isEqual(new MagLevString($other->getMessage()));
		#/src/maglev/MagLevTypes.hx:135: characters 24-53
		$same = $same && $this->data->isEqual($other->getData());
		#/src/maglev/MagLevTypes.hx:136: characters 9-20
		return $same;
	}

	/**
	 * @return MagLevString
	 */
	public function toJson () {
		#/src/maglev/MagLevTypes.hx:139: characters 9-135
		return new MagLevString("{\"code\": " . (\Std::string($this->code->toJson())??'null') . ", \"message\": " . (\Std::string($this->message->toJson())??'null') . ", \"data\": " . (\Std::string($this->data->toJson())??'null') . "}");
	}
}

Boot::registerClass(MagLevError::class, 'maglev.MagLevError');
