<?php

$names = ["Metwally", "Mohamed", "Mahmoud", "Desha", "Amin", "Eslam"];

sort($names);

echo '<pre>';
print_r($names);
echo '</pre>';

rsort($names);

echo '<pre>';
print_r($names);
echo '</pre>';

asort($names);

echo '<pre>';
print_r($names);
echo '</pre>';

echo '<br>' . "----------------*****-----------------" . '<br>';

$countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];

asort($countries);

echo '<pre>';
print_r($countries);
echo '</pre>';

arsort($countries);

echo '<pre>';
print_r($countries);
echo '</pre>';

echo '<br>' . "----------------*****-----------------" . '<br>';

$codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];
ksort($codes); //يتم الترتيب عن طريق ال key 

echo '<pre>';
print_r($codes);
echo '</pre>';

krsort($codes); //يتم الترتيب عن طريق ال key 

echo '<pre>';
print_r($codes);
echo '</pre>';


$files = ["Photo1.png", "Photo20.png", "Photo3.png"];

sort($files);

echo '<pre>';
print_r($files);
echo '</pre>';

natsort($files);

echo '<pre>';
print_r($files);
echo '</pre>';
