<?php



var_dump(strpos("Hello World", "H"));    //0
echo "<br>";
var_dump(strpos("Hello Horld", "H", 3));    //6
echo "<br>";
var_dump(strpos("Hello Horld", "H", 6));    //6
echo "<br>";
var_dump(strpos("Hello Horld", "h"));    // false
echo "<br>";
var_dump(strpos("Hello Horld", "H", -5));    //6
echo "<br>";
var_dump(strpos("Hello Horld", "H", -11));    //0
echo "<br>";
var_dump(strrpos("Hello Horld", "H"));
echo "<br>";
var_dump(stripos("hello horld", "H"));
echo "<br>";
var_dump(strripos("hello horld", "H"));
echo "<br>";
var_dump(substr_count("Hello Hello","He"));
echo "<br>";
var_dump(substr_count("Hello Hello","He",1,6));
echo "<br>";
var_dump(substr_count("abcdabcda","abcda"));   // overlab str
echo "<br>";