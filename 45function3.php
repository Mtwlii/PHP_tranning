<?php
//function3
/* 
الفرق بين echo للبيانات وانك تعملها Return وتستخدمها تاني 

 */
$prizes = ["PC", "PlayStation", "XBOX", "Apple TV", "Laptop", "IPad", "iPhone"];

function get_number($num_one, $num_two)
{
    return $num_one + $num_two;

    //**  ay haga ba3d el Return M4 bt4t8l**
}


//get_number(2, 1);
//echo $prizes[3];

//$prizes_number = get_number(2, 1); 

// $prizes_number = get_number(2, 1); 
// var_dump($prizes_number);
echo $prizes[get_number(2, 1)];
