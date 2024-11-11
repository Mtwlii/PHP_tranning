<?php

$family = ["Osama", "Metwally", "Mohamed", "Tefa", "Amin", ["Nourhan", "Mariam"]];
echo '<pre>';
print_r($family);
print_r(array_reverse($family, true));
echo '</pre>';

echo '<br>' . "##################" . '<br>';

$countries = ["EG" => "Egypt", "KSA" => "Soudi Arabia", "Sy" => "Syria", "USA" => "United State"];
echo '<pre>';
print_r(array_flip($countries));
echo '</pre>';

echo '<br>' . "##################" . '<br>';

$counting =
    [
        "A",
        "B",
        "C",
        [1, 2, 3]
    ];
echo count($counting, 1);

echo '<br>' . "##################" . '<br>';

$search = ["1", 2, 3, 4];

if (in_array("1", $search, true)) {
    echo "The Element Is Found";
} else {
    echo "Can't Found This Element";
};

echo '<br>' . "##################" . '<br>';

$couses =
    [
        "Javascript" => 95,
        "PHP" => 100,
        "HTML" => 60,
        "CSS" => 65
    ];
if (array_key_exists("PHP", $couses)) {
    echo "The Course Is Found And The Price Is = " . $couses['PHP'];
} else {
    echo "The Course Is Not Found";
}
