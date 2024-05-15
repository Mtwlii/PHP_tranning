<?php


function one()
{
    return "One From Function";
}
$func1 = "one";

//echo  $func1(); // في الحاله دي بيدور عل fun بالقيمه اللي هي one 
echo one();
echo "<br>";
function say_hello_to($someone)
{
    return "Hello $someone";
}
$func2 = "say_hello_to";
echo $func2("Metoo");

echo "<br>";
function testing()
{
    return "Testing From Function";
}
echo "<br>";

if (function_exists("testing")) { //بتعمل اختبار هل function موجوده أصلا ولا لا
    echo testing();
} else {
    echo "Function is Not Found";
}

echo "<br>";

echo strlen("Metwally");
