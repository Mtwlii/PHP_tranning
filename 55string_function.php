<?php


$friends = ["Ahmed", "Mostafa", "Abdo", "Amin"];

echo implode(" ", $friends) . "<br>";
echo implode(", ", $friends) . "<br>";
echo implode(" @@ ", $friends) . "<br>";
echo implode($friends) . "<br>";

$str = "Elzero Web Scholl Is Cool";
echo "<pre>";

print_r(explode(" ", $str, 5));

echo "</pre>";

echo str_shuffle("Elzero") . "<br>";
echo strrev("Elzero") . "<br>";

echo "<br>";
echo "<br>";

echo strlen("  Elzero  ") . "<br>";
echo strlen(trim("        Elzero          ")) . "<br>";

echo trim("*@Elzero**", "*@") . "<br>";
