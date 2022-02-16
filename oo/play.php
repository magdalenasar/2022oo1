<?php

class Ship
{
public $name;
public $weaponPower = 0;
public $jediFactor = 0;
public $strength = 0;

public function sayHello(){
echo "HELLOOOOO";
}

public function getName(){
return $this->name;
}

}

$myShip = new Ship();
$myShip->name = "Jedi Starship";
$myShip->strength = 10;

echo "Ship name: " . $myShip->name;
echo "<hr>";
$myShip->sayHello();
echo "<hr>";
echo $myShip->getName();