<?php

//Anonymous Function مهمممممممممممم


$say_hello = function () {
    return "Hello";
};

echo $say_hello();
echo '<br> ############## <br>';

$say_hola = function ($somone) {
    return "hola $somone";
};

echo $say_hola("Metoo");


echo '<br> ############## <br>';

$msg = "hi";

$say_hi = function ($somone) use ($msg) {
    return "$msg $somone";
};

echo $say_hi("Metoo");

echo '<br> ############## <br>';
$nums = [10, 20, 30, 40, 50];
function add_five($item)
{
    return $item += 5;
}

$nums_after_adding_five = array_map("add_five", $nums); //بتديله  function بتبدأ تتنفذ علي كل عنصر من عناصر ال array 
echo '<pre>';
print_r($nums_after_adding_five);
echo '</pre>';


$nums_after_adding_ten = array_map(function ($item) {
    return $item + 10;
}, $nums); //بتديله  function بتبدأ تتنفذ علي كل عنصر من عناصر ال array 
echo '<pre>';
print_r($nums_after_adding_ten);
echo '</pre>';
