<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace maglev;

use \php\Boot;
use \sys\Http;

class Telemetry {
	/**
	 * @var \Array_hx
	 */
	public $info;

	/**
	 * @return void
	 */
	public function __construct () {
		#/src/maglev/Telemetry.hx:18: characters 9-35
		$this->info = new \Array_hx();
	}

	/**
	 * @param \Array_hx $args
	 * 
	 * @return void
	 */
	public function addInfo ($args) {
		#/src/maglev/Telemetry.hx:21: lines 21-23
		$_g = 0;
		while ($_g < $args->length) {
			#/src/maglev/Telemetry.hx:21: characters 13-16
			$arg = ($args->arr[$_g] ?? null);
			#/src/maglev/Telemetry.hx:21: lines 21-23
			++$_g;
			#/src/maglev/Telemetry.hx:22: characters 13-27
			$_this = $this->info;
			$_this->arr[$_this->length++] = $arg;
		}
	}

	/**
	 * @param \Array_hx $args
	 * 
	 * @return void
	 */
	public function send ($args) {
		#/src/maglev/Telemetry.hx:26: characters 9-68
		$url = "https://telemetry.mindpowered.dev/send?";
		#/src/maglev/Telemetry.hx:27: lines 27-29
		$_g = 0;
		$_g1 = $this->info;
		while ($_g < $_g1->length) {
			#/src/maglev/Telemetry.hx:27: characters 13-17
			$item = ($_g1->arr[$_g] ?? null);
			#/src/maglev/Telemetry.hx:27: lines 27-29
			++$_g;
			#/src/maglev/Telemetry.hx:28: characters 13-53
			$url = ($url??'null') . (rawurlencode($item)??'null') . "&";
		}
		#/src/maglev/Telemetry.hx:30: lines 30-32
		$_g = 0;
		while ($_g < $args->length) {
			#/src/maglev/Telemetry.hx:30: characters 13-17
			$item = ($args->arr[$_g] ?? null);
			#/src/maglev/Telemetry.hx:30: lines 30-32
			++$_g;
			#/src/maglev/Telemetry.hx:31: characters 13-53
			$url = ($url??'null') . (rawurlencode($item)??'null') . "&";
		}
		#/src/maglev/Telemetry.hx:33: lines 33-35
		try {
			#/src/maglev/Telemetry.hx:34: characters 11-36
			Http::requestUrl($url);
		} catch(\Throwable $_g) {
		}
	}
}

Boot::registerClass(Telemetry::class, 'maglev.Telemetry');
