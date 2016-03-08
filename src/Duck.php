<?php

namespace Foobar;

abstract class Duck {

	protected $quackBehavior;
	protected $flyBehavior;

	public function setQuackBehavior(QuackBehavior $qb) {
		$this->quackBehavior = $qb;
	}

	public function setFlyBehavior(FlyBehavior $fb) {
		$this->flyBehavior = $fb;
	}

	abstract function display();

	public function swim() {
		echo "I'm swimming (floating)...<br />";
	}

	public function performQuack() {

		$this->quackBehavior->quack();
	}

	public function performFly() {
		$this->flyBehavior->fly();
	}
}

?>