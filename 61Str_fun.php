<?php

$str = "Welcome To Elzero Web School Very_very_Good_Long";

echo strlen($str) . "<br>";
echo wordwrap($str, 8, "<br>", true);

echo  "<br>";

echo ord("a"); //97 مكان و رقم الحرف في البينري 

echo  "<br>";

echo chr(97); //a

echo  "<br>";
echo similar_text("Elz@ero", "Elz_eroo"); //6

echo  "<br>";
echo similar_text("Elz_ero", "Elz@ero", $perc); //6


echo  "<br>";
echo $perc;
