<?php

require "Dog.php";
require "Puppy.php";
require "Cat.php";

//create object from class Dog
$dog = new Dog('Pluto');
//call object method bark()
print $dog->bark();
print "<br>";
print $dog->name;
print "<br>";
print $dog->public;
print "<br>";
print $dog->get('protected');
print "<br>";
print $dog->get('private');
print "<br>";
print $dog->get('unset');
$dog->set('private','pirate');
print "<br>";
print $dog->get('private');

print"<hr/>";
$puppy = new Puppy('Puppy');
print $puppy->bark();
print "<br>";
print $puppy->name;
print "<br>";
print $puppy->public;
print "<br>";
print $puppy->get('protected');
print "<br>";
print $puppy->get('private');
print "<br>";
print $puppy->get('unset');
$puppy->set('private','Puppypirate');
print "<br>";
print $puppy->get('private');

print"<hr/>";
//access class members in class lever, not object lever
print Cat::$phrase;
print "<br>";
print Cat::mieaw();

?>