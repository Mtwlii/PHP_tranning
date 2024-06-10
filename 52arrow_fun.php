<?php
//    =>Fn

//################################
$say_hello = fn () => "Hello";

echo $say_hello();


echo '<br>############<br>';

//$someone = "Metwally";
$say_hola = fn ($someone) => "Holla $someone";
echo $say_hola("Metwally");

echo '<br>############<br>';

$msg = "Hi";

$say_hi = fn ($someone) => "$msg $someone";
echo  $say_hi("Metwally");


echo '<br>############<br>';
$nums = [10, 20, 30, 40, 50];
$nums_after_adding_ten  = array_map(
    fn ($item) =>
    $item + 10,
    $nums
);

echo '<pre>';
print_r($nums_after_adding_ten);
echo '</pre>';
