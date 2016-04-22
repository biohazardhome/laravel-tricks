<?php

function call(callable $fn, array $args = array()) {
	return call_user_func_array($fn, $args);
}

/**
	Create path from chunks paths
*/
function createPath() {
	$segments = func_get_args();
	if (count($segments) === 1) {
		if (!is_array($segments[0])) {
			throw new InvalidArgumentException('one parameter must be an array');
		}
		$segments = $segments[0];
	}
	return join(DIRECTORY_SEPARATOR, $segments);
}

function ds() {
	return call_user_func_array('createPath', func_get_args());
}

function profiler() {
	static $time = 0;
	
	if ($time !== 0) {
		$tmp = microtime(1) - $time;
		$time = 0;
		return $tmp;
	} else {
		$time = microtime(1);
		return 0;
	}
}

class stdObject extends \stdClass {

	public function __construct(array $items = []) {
		foreach ($items as $key => $item) {
			$this->{$key} = $item;
		}
	}

	public function __call($method, $args) {
		return call_user_func_array($this->{$method}, $args);
	}
}