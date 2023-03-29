<?php
$object1 = new User;
$object1->name = "Alice";
$object2 = clone $object1;
$object2->name = "Jane";

echo "The name of the first girl is ". $object1->name."<br>";
echo "The name of the second girl is ". $object2->name."<br>";

class User
{
    public $name;

}
?>