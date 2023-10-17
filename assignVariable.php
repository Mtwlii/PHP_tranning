<?php


/*Assign Variable By Refrance   تعيين متغير حسب المرجع

----Assigned By Refrance 

*/
$m = "Metwally";
$b = &$m;
$b = "Mohamed";
$m = "Qasim";
echo $m;
echo '<br>';
echo $b;
 