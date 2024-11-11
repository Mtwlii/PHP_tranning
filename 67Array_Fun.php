<?php

$merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
$merge_two = ["One" => "HTML", "Four" => "Pythone"];

echo "<pre>";
print_r(array_merge($merge_one, $merge_two));
echo "</pre>";

$merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
$merge_four = [40 => "Pythone", "10" => "Go"];

echo "<pre>";
print_r(array_merge($merge_three, $merge_four));
echo "</pre>";

$main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
$replace = ["One" => "HTML", "Four" => "Pythone"];
echo "<pre>";
print_r(array_replace($main, $replace));
echo "</pre>";

//!------------------------

echo "<pre>";
print_r(array_replace($merge_three, $merge_four));
echo "</pre>";

$nums = ["Metwally", "Mohamed", "Mahmoud", "Desha", "Amin", "Eslam"];

echo $nums[array_rand($nums)] . '<br>'; // بيخرج ال key مش القيمه

echo "<pre>";
print_r(array_rand($nums , 3 ));
echo "</pre>";
