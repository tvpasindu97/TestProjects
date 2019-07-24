<?php 
require("vendor/autoload.php");

use HelloWorld\SayHello;
use dothemaths\maths;
use Acme\app;
$text = new app();
echo SayHello::world();
echo maths::addvalue(5,6); echo " ";
echo maths::addvalue(45,12); echo " ";
echo maths::addvalue(20,20); echo " ";
echo maths::addvalue(30,6);