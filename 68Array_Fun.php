<?php


$chars = ["A", "B", "C", "D"];


$first = array_shift($chars);

echo $first . "<br>"; //A

echo '<pre>';
print_r($chars);
echo '</pre>';

$last = array_pop($chars);
echo $last . "<br>"; //D

echo '<pre>';
print_r($chars);
echo '</pre>';


array_push($chars, "X", "Y", "Z");


echo '<pre>';
print_r($chars);
echo '</pre>';

array_push($chars, "1");
$chars[] = "1"; // في حالة عنصر واحد بس


echo '<pre>';
print_r($chars);
echo '</pre>';

array_unshift($chars, "One", "Two", "Three");

echo '<pre>';
print_r($chars);
echo '</pre>';
