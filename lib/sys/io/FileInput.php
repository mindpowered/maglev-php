<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace sys\io;

use \haxe\io\_BytesData\Container;
use \php\Boot;
use \haxe\Exception;
use \haxe\io\Eof;
use \haxe\io\Error;
use \haxe\io\Input;
use \haxe\io\Bytes;

/**
 * Use `sys.io.File.read` to create a `FileInput`.
 */
class FileInput extends Input {
	/**
	 * @var mixed
	 */
	public $__f;

	/**
	 * @param mixed $f
	 * 
	 * @return void
	 */
	public function __construct ($f) {
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:37: characters 3-10
		$this->__f = $f;
	}

	/**
	 * @return void
	 */
	public function close () {
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:63: characters 3-16
		parent::close();
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:64: lines 64-65
		if ($this->__f !== null) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:65: characters 4-15
			fclose($this->__f);
		}
	}

	/**
	 * @return bool
	 */
	public function eof () {
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:91: characters 3-19
		return feof($this->__f);
	}

	/**
	 * @return int
	 */
	public function readByte () {
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:41: characters 3-25
		$r = fread($this->__f, 1);
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:42: lines 42-43
		if (feof($this->__f)) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:43: characters 4-9
			throw Exception::thrown(new Eof());
		}
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:44: lines 44-45
		if ($r === false) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:45: characters 4-9
			throw Exception::thrown(Error::Custom("An error occurred"));
		}
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:46: characters 3-16
		return ord($r);
	}

	/**
	 * @param Bytes $s
	 * @param int $p
	 * @param int $l
	 * 
	 * @return int
	 */
	public function readBytes ($s, $p, $l) {
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:50: lines 50-51
		if (feof($this->__f)) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:51: characters 4-9
			throw Exception::thrown(new Eof());
		}
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:52: characters 3-25
		$r = fread($this->__f, $l);
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:53: lines 53-54
		if ($r === false) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:54: characters 4-9
			throw Exception::thrown(Error::Custom("An error occurred"));
		}
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:55: lines 55-56
		if (strlen($r) === 0) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:56: characters 4-9
			throw Exception::thrown(new Eof());
		}
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:57: characters 11-28
		$b = strlen($r);
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:57: characters 3-29
		$b1 = new Bytes($b, new Container($r));
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:58: characters 3-29
		$len = strlen($r);
		if (($p < 0) || ($len < 0) || (($p + $len) > $s->length) || ($len > $b1->length)) {
			throw Exception::thrown(Error::OutsideBounds());
		} else {
			$this1 = $s->b;
			$src = $b1->b;
			$this1->s = ((substr($this1->s, 0, $p) . substr($src->s, 0, $len)) . substr($this1->s, $p + $len));
		}
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:59: characters 3-19
		return strlen($r);
	}

	/**
	 * @return string
	 */
	public function readLine () {
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:95: characters 3-22
		$r = fgets($this->__f);
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:96: lines 96-97
		if (false === $r) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:97: characters 4-9
			throw Exception::thrown(new Eof());
		}
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:98: characters 3-26
		return rtrim($r, "\x0D\x0A");
	}

	/**
	 * @param int $p
	 * @param FileSeek $pos
	 * 
	 * @return void
	 */
	public function seek ($p, $pos) {
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:69: characters 3-9
		$w = null;
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:70: lines 70-77
		$__hx__switch = ($pos->index);
		if ($__hx__switch === 0) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:72: characters 5-17
			$w = SEEK_SET;
		} else if ($__hx__switch === 1) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:74: characters 5-17
			$w = SEEK_CUR;
		} else if ($__hx__switch === 2) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:76: characters 5-17
			$w = SEEK_END;
		}
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:78: characters 3-28
		$r = fseek($this->__f, $p, $w);
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:79: lines 79-80
		if ($r === false) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:80: characters 4-9
			throw Exception::thrown(Error::Custom("An error occurred"));
		}
	}

	/**
	 * @return int
	 */
	public function tell () {
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:84: characters 3-22
		$r = ftell($this->__f);
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:85: lines 85-86
		if ($r === false) {
			#/opt/haxe/std/php/_std/sys/io/FileInput.hx:86: characters 4-9
			throw Exception::thrown(Error::Custom("An error occurred"));
		}
		#/opt/haxe/std/php/_std/sys/io/FileInput.hx:87: characters 3-16
		return $r;
	}
}

Boot::registerClass(FileInput::class, 'sys.io.FileInput');
