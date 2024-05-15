<?php

// bassing argomint by referanc and return type decloration
function add_five(&$number)
{
    $number += 5;
    return $number;
}

$n = 15;
echo add_five($n) . '<br>';
echo $n . '<br>';

function calculate($n1, $n2): int   // تكتب int لتحديد نوع البيانات الناتجه من عملية الجمع  
{
    return $n1 + $n2;
}

echo calculate(10.5, 9.5);

echo '<br>';
echo gettype(calculate(10.5, 9.5));
