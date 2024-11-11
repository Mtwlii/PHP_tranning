<?php

echo strstr("Elzero Web", "Web") . "<br>"; // web
echo strstr("Elzero Web", "W") . "<br>"; // web
echo strstr("Elzero Web", "z") . "<br>"; // zeroo web
echo strstr("Elzero Web", "W", true) . "<br>"; // el zeroo  7

echo strstr("Elzero Web", "W") . "<br>"; // false   3
var_dump(strstr("elzeroo Web", "w"));
echo  "<br>";

echo stristr("Elzero Web", "w") . "<br>"; // false   3
var_dump(stristr("Elzeroo Web", "w"));
echo  "<br>";
echo  "<br>";

echo 10_000_000;
echo  "<br>";

echo number_format(1000000);
echo  "<br>";
echo number_format(1000000.156023, 3, "#");
echo  "<br>";
echo number_format(1000000.156023, 3, "#","A");
echo  "<br>";
