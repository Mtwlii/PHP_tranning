<?php


/**
 * **func_num_args()
 * **func_get_arg(index)
 * **func_get_args()
 */



function calculate(...$nums) //Splat (Spread) Syntax In JS
{
    // echo "Number Of Arguments " . func_num_args() . "<br>";
    // echo "Number Index Number 3 Is " . func_get_arg(3) . "<br>";
    // echo "<pre>";
    // print_r(func_get_args());
    // echo  "</pre>";
    // $result = 0;
    // foreach (func_get_args() as $arg) :
    //     $result += $arg;
    // endforeach;
    // echo $result;
    print_r($nums);
    $result = 0;
    foreach ($nums as $num) :
        $result += $num;
    endforeach;
    echo $result;
}
calculate(10, 20, 50, 30, 40);
