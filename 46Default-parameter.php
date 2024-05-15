<?php


function get_data($country = "Private Country", $name = "Private Name", $age = "Private age", $address = "Private address")

{
    $line_one = "Your Name is $name , And Your Country is $country <br>";
    $line_two = "Your Age Is $age And Your Address Is $address";
    return $line_one . $line_two;
}
//echo get_data("Egypt", "Metoo", 25, "MitGhamer");
echo get_data(address: "cairo" , name:"Metoo"); //<<<<<<<<<<<<<<<<<مهم
