<?php

/*
    Control Structure
    - If, Elseif, Else <= Advanced Practice

    30% To 60%
  */



$name = "Osama";
$is_student = false;
$is_orphan = true;
$country = "Egypy";
$country_diacount =  50;
$price = 100;
$student_discount = 10;
$orphan_discount = 15;

if ($country == "Egypy") {
    if ($is_student == true) {
        echo '';
    } else {
        echo "Hallo $name";
        echo "<br>";
        echo "Country Discount Is $country_diacount";
        echo "<br>";
        echo "The Final Price is "  . $price - $country_diacount;
    }
} else {
    echo "Hallo $name";
    echo "<br>";
    echo "No Discount";
    echo "<br>";
    echo "The Final Price $price";
};















if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ($_POST['lang'] == 'ar') {

        header("Location: ar.php");

        exit();
    } elseif ($_POST['lang'] == 'en') {

        header("Location: en.php");

        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="es">Spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>
</body>

</html>