<?php

namespace Foobar;

require_once 'vendor/autoload.php';

$md = new MallardDuck();
$md->display();
$md->swim();
$md->performQuack();
$md->performFly();

$md->setQuackBehavior(new MuteQuack());
$md->performQuack();
$md->setFlyBehavior(new FlyNoWay());
$md->performFly();

?>