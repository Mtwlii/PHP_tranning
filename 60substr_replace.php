<?php

echo substr_replace("OneTwo", 1, 0); //1
echo "<br>";

echo substr_replace("OneTwo", 1, 2); //On1
echo "<br>";

echo substr_replace("OneTwo", 1, -2); //OneT2
echo "<br>";

echo substr_replace("OneTwo", 2, 2); //On2
echo "<br>";
echo substr_replace("OneTwo", 2, 2, 2); //On2wo
echo "<br>";
echo substr_replace("OneTwo", 5, 1, 5); //O5


echo "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, 3); //Elzero_A_School
echo "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, -1); //Elzero_Al
echo "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, -10); //Elzero_AWeb_School
echo "<br>";


echo substr_replace("Elzero_Web_School",  "@", 1);
echo "<br>";
echo substr_replace("Elzero_Web_School",  "@", 1, 0); // معناها كده insert لان انا خليت اللينس صفر يعني مش هيشيل حاجه
echo "<br>"; 

echo "<pre>";
print_r(substr_replace(["OneTow","ThreeFour"], 1, 0));
echo "</pre>";
