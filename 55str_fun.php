<?php

$friends = ["Ahmed", "Osama", "Ali", "selem"];

echo implode(" ", $friends) . "<br>";
echo implode(", ", $friends) . "<br>";
echo implode(" @", $friends) . "<br>";
echo implode("//", $friends) . "<br>";


$str = "Elzero Web school Is cool";

echo "<pre>";
print_r(explode(" ", $str));
echo "/<pre>";



echo "<pre>";
print_r(explode("I", $str));
echo "/<pre>";



echo "<pre>";
print_r(explode(" ", $str, -2));
echo "/<pre>";

echo str_shuffle("Elzero") . "<br>";
echo strrev("Elzero") . "<br>";

echo strlen("   Metwally   ")  . "<br>";

echo strlen(trim("   Metwally   ")) . "<br>";


echo trim("#@@Metwally@@@###" , "#") . "<br>";

echo rtrim("#@@Metwally@@@@###" , "#@") . "<br>";

echo ltrim("#@@Metwally@@@@###" , "#@") . "<br>";
