<?php 
spl_autoload_register(function($class){
    include '../class/' .$class . '.php';
});
$nbr1 = Number::withZero(150);
echo "<p>" . $nbr1 ."</p>";

$nbr2 = Number::withZero(5);
echo "<p>" . $nbr2 ."</p>";
//$nbr3 =new Number;

$nbr4 = Number::withZero(5);
echo "<p>" . $nbr4 ."</p>";


?>