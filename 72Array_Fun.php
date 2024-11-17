<?php



function add($carry, $item)
{
    echo "$carry <br>";
    echo  "+" . "<br>";
    echo "$item <br>";
    echo $item + $carry . "<br>";
    echo '<br>' . "----------------*****-----------------" . '<br>';


    return $carry + $item;
}

$nums = [10, 20, 50, 100, 10];



echo array_reduce($nums, "add", 100);


echo '<br>' . "----------------*****-----------------" . '<br>';
echo '<br>' . "----------------*****-----------------" . '<br>';



// From PHP Website
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "sum")); // int(15)
var_dump(array_reduce($a, "product", 10)); // int(1200), because: 10*1*2*3*4*5
var_dump(array_reduce($x, "sum", "No data to reduce")); // string(17) "No data to reduce"
