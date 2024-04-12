<?php

$page = "Home";

if ($page == "About") {

    echo  "This is The home page";
}

echo "<br>";

// If, Else

$title = "";

if ($title == "") {

    echo "Unknown Page";
} else {

    echo $title;
}


echo "<br>";
// If , Elseif , Else

$lang = "English";

if ($lang == "Arabic") {

    echo 'مرحبا';
} elseif ($lang == "English") {

    echo "Hello";
} elseif ($lang == "Spanish") {

    echo 'hola';
} else {

    echo "UnKnown Language";
}
