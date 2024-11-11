<?php

$friends = ["Metwally", "Mostafa", "Abdo", "Ahmed", "Amin"];
$countries = ["EG" => "Egypt", "KSA" => "Soudi Arabia", "Sy" => "Syria", "USA" => "United State"];
$keys = ["A", "O", "K", "S"];
$value = ["Ahmed", "Osama", "Kamal", "Somaa"];
$counting = ["A", "A", "B", "B", "B", "C"];
echo "<pre>";
print_r(array_chunk($friends, 2));
echo "</pre>";

echo "<br>" . "####################" . "<br>";

echo "<pre>";
print_r(array_chunk($countries, 2, true));
echo "</pre>";

echo "<br>" . "####################" . "<br>";

echo "<pre>";
print_r(array_change_key_case($countries, CASE_UPPER));
echo "</pre>";

echo "<br>" . "####################" . "<br>";

echo '<pre>';
print_r(array_combine($keys, $value));
echo '</pre>';

echo "<br>" . "####################" . "<br>";

echo '<pre>';
print_r(array_count_values($counting));//بتديك العنصر متكرر كام مره 
echo '</pre>';
