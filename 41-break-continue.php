<?php


//break , switch




foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {
    if ($country == "USA") {
        break;
    }
    echo  $country . "<br>";
}

echo "########### <br>";


foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {
    if ($country == "USA") {
        continue;
    }
    echo  $country . "<br>";
}
