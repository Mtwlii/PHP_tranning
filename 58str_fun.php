<?php

parse_str("name=Osama&email=0@nn.sa&os=mac", $query);


echo '<pre>';

print_r($query);

echo '</pre>';
echo $query["name"] . "<br>";
echo $query["email"] . "<br>";
echo $query["os"] . "<br>";

echo "Hello []  ()  * + . <br>";
echo quotemeta("Hello []  ()  * + . <br>"); ///////////////////////////////////


echo str_pad("12", 8, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("321", 8, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("500432", 8, 0, STR_PAD_LEFT) . "<br>";


echo strtr("E@zero Web Schoo@", "@", "l");

echo "<br>";

$translation =
    [
        "@" => "l",
        "#" => "o"
    ];

echo strtr("E@zer# Web Sch##@", $translation);
