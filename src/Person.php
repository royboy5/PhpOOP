<?php

namespace Foobar;

/**
 *
 */
class Person {

	private $first_name;
	private $last_name;

	function __construct($first, $last) {
		$this->first_name = $first;
		$this->last_name = $last;
	}

	public function display_name() {
		echo $this->first_name . ' ' . $this->last_name;
	}
}

?>