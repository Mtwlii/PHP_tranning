<?php


$a = 10;
if ($a > 8) {
    echo "Good";
} else {
    echo "Bad";
}

echo '<br>';


echo $a > 8 ? " Good" : "Bad";

echo '<br>';
echo '<br>';
echo "I love PHP Because Its A ";
$a = 10;
if ($a > 8) {
    echo "Good";
} else {
    echo "Bad";
}

echo " Language ";

echo '<br>';
echo '<br>';

echo "I love PHP Because Its A " .   ($a > 8 ? " Good" : "Bad")  . " Language ";
echo '<br>';
$result = $a > 8 ? " Good" : "Bad";
echo '<br>';
echo "I love PHP Because Its A $result  Language ";
