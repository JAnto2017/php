<?php
$x=5;
function myTest(){
$x=7;	
echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
