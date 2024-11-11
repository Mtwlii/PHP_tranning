<?php

echo str_replace("@", "o", "Elzer@ Web Sc@@l", $r);

echo "<br>";

echo "Replacse Count Is $r";
echo "<br>";

echo str_replace(["@", "#"], ["o", "l"], "E#zer@ Web Sc@@#");


echo "<pre>";

print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One"]));

echo "</pre>";

echo "<pre>";

print_r(str_replace(["One", "Two", "Three"], [1, 2], ["One", "Two", "Three", "One"]));

echo "</pre>";

echo "<pre>";

print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One"]));

echo "</pre>";
