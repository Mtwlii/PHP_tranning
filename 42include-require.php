<?php

include("test.php");
echo $a . '<br>';

echo "####### Continue ######## <br>";
// include (بتكمل الكود حتي لو فب غلط)

require("test.php");
echo $a . '<br>';

echo "####### Continue ######## <br>";
$a = 20;
// require (بتقف عند السطر اللي فيه غلط ومش بتكمل الكود)

include_once("test.php");
echo $a . '<br>';

echo "####### Continue ######## <br>";
// include_once (بتتاكد انت ضفت القيمه قبل كده ولا لا لو ضفتها بتتعامل بالجديده)