<?php

/*
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    @
    - Variable
    - File
    - Include
  */

// Variable


$a = 10;
$b = @$a or die("Variable Not Found");
echo $b;

echo '<br>';

//file

$f = @file("metoo.txt") or die("File Is not Found");

echo '<pre>';
print_r($f);
echo '</pre>';

echo '<br>';

//Include

(@include("Metoo.php")) or die("Include File Is not Found");








echo '<br>';
echo '//////////////////////////////////////////////';
echo '<br>';
$a = 10;
$b = @$a or die("Variable Not Found");

echo "Test $b";
echo '<br>';

// File
$f = @file("osama.txt") or die("File Not Found");
echo '<pre>';
print_r($f);
echo '</pre>';
echo '<br>';

// Include
(@include("osama_elzero.php")) or die("Include File Not Found");
