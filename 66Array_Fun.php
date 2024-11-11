<?php

$friends = ["Osama", "Ahmed", "Sameh", "Mohamed", "Gamal", "Eman"];

echo current($friends) . "<br>"; // Osama
echo next($friends) . "<br>"; // Ahmed
echo current($friends) . "<br>"; // Ahmed
echo next($friends) . "<br>"; // Sameh
echo current($friends) . "<br>"; // Sameh
echo prev($friends) . "<br>"; // Ahmed
echo reset($friends) . "<br>"; // Osame
echo end($friends) . "<br>"; // Eman
echo current($friends) . "<br>"; // Eman