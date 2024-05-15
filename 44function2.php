<?php



/* function say_hello_to($one, $two)
{
    echo "Hello $one <br>";
}
say_hello_to("Metoo", "Ahmed");

 */
//##########

function deep_freezer($item)
{
    if ($item == "water") {
        echo "Make It Ice <br>";
    } elseif ($item == "Coca Cola") {
        echo "I can freez it <br>";
    } elseif ($item == "fruits") {
        echo "Make It Fresh <br>";
    } else {
        echo "Unknown Item <br>";
    }
}
deep_freezer("water");
deep_freezer("Coca Cola");
deep_freezer("fruits");
deep_freezer("remote");
