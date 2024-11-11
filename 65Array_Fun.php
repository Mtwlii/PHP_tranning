<?php

$friends = ["Metwally", "Mostafa", "Abdo", "Ahmed", "Metwally", "Amin", 1, "1"];

echo "<pre>";
print_r(array_keys($friends));
echo "</pre>";

echo "<pre>";
print_r(array_keys($friends, "Metwally"));
echo "</pre>";

echo "<pre>";
print_r(array_keys($friends, 1, true));
echo "</pre>";

$countries = ["EG" => "Egypt", "KSA" => "Soudi Arabia", "Sy" => "Syria", "USA" => "United State"];
echo "<pre>";
print_r(array_values($countries));
echo "</pre>";
echo "################## <br>";

$pad = ["A", "B", "C", "D"];

echo "<pre>";
print_r(array_pad($pad, 10, "@"));
echo "</pre>";

echo "################## <br>";

echo "<pre>";
print_r(array_pad($pad, -10, "@"));
echo "</pre>";

echo "################## <br>";
echo "<pre>";
print_r(array_pad($pad, 2, "@"));
echo "</pre>";

$product = [10, 5, 2, 10];
echo array_product($product) . "<br>"; //1000 //ضرب
$sum = [10, 5, 2, 10];
echo array_sum($sum); //27 //جمع
