<?php

$group_of_skills = ["HTML", "CSS", "JS", "PHP"];
function get_data($name, $country = "Private", ...$skills)
{
    echo "Hello $name  Your Country Is $country <br >";
    foreach ($skills as $skill) :
        echo " -- $skill <br>";
    endforeach;
}
get_data("Metoo", "Egypt", ...$group_of_skills);
