<?php
$chars = ["A", "B", "C", "D", "E", "F", "G"];

$chars_With_string_Keys = ["A" => 1, "B" => 2, "C" => 3];

$chars_With_numeric_Keys = [10 => 1, 20 => 2, 30 => 3];


echo '<pre>';
print_r(array_slice($chars,2));
print_r(array_slice($chars,-4));
print_r(array_slice($chars,2,3));
print_r(array_slice($chars,2,-2));
echo '</pre>';


echo '<pre>';
print_r(array_slice($chars_With_string_Keys, 0,2));
print_r(array_slice($chars_With_numeric_Keys, 0,2,true));
echo '</pre>';


echo '<pre>';
print_r($chars);
echo '</pre>';

echo '<br>' ."----------------*****-----------------" . '<br>';
$nums = [10, 20, 30, 40, 50, 60, 70];

echo '<pre>';
print_r(array_splice($nums,2,2,['one','two', 'three']));
print_r($nums);
echo '</pre>';