<?php

//array_map
//array_filter

function add_title($fname, $lname)
{
    return  "Hello Mr/ $fname $lname ♥";
}
//echo add_title("Metwally") ;

$First_name = ["Metwally", "Mohamed", "Osama", "Mahmoud", "Sameh", "Gamal"];
$last_name = ["Ameer", "Amin", "Desha", "Eslam", "Hegazy", "Ibrahim"];

echo '<pre>';
print_r(array_map("add_title", $First_name, $last_name));

echo '<br>' . "----------------*****-----------------" . '<br>';

print_r(array_map(fn($f, $l) => "Hello Mr/ $f $l", $First_name, $last_name));
echo '</pre>';

echo '<br>' . "----------------*****-----------------" . '<br>';


$nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
];

function check_nums($n1, $n2)
{
    return $n1 > 4 || $n2 > 4;
}

echo '<pre>';
print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH));
echo '</pre>';
