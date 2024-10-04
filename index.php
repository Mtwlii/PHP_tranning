<?php

echo str_replace("@", "o", "Elzer@ Web Sc@@l", $r);

echo "<br>";

echo "Replacse Count Is $r";
echo "<br>";

echo str_replace(["@", "#"], ["o", "l"], "E#zer@ Web Sc@@#");
