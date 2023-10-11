<?php
//Variable Variable

$m = "Metwally";
$$m = "Mohamed";
$$$m ="Qasim";


echo $m;//Metwally
echo '<br>';

echo $$m;//Mohamed
echo '<br>';
echo $Metwally;//Mohamed
echo '<br>';
echo $$Metwally;//Qasim
echo '<br>';
echo $$$m;//Qasim
echo '<br>';
echo "Hello ${$m}";
echo '<br>';
echo "Hello ${$$m}";