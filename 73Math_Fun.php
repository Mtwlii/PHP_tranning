<?php



echo abs(10) . '<br>';
echo abs(0) . '<br>';
echo abs(-20) . '<br>';

echo rand() . '<br>';
echo rand(1, 50) . '<br>';
echo mt_getrandmax() . '<br>';


echo 10 / 5 . '<br>';
echo gettype(10 / 5) . '<br>';

echo 11 / 5 . '<br>';
echo gettype(11 / 5) . '<br>';

echo intdiv(11, 5) . '<br>';
echo gettype(intdiv(11, 5)) . '<br>';

echo fmod(11, 5) . '<br>';
echo gettype(fmod(11, 5)) . '<br>';