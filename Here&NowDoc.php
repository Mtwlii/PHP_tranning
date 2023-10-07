<?php


$name = "Metoo";
//HereDoc
echo <<<"Here"

Hello PHP
Special Character $$$$$$$ '''' """"""" //////
Hello My Name Is $name

Here;

echo '<br>';

//NowDoc

echo <<<'now'

Hello PHP
Special Character $$$$$$$ '''' """"""" //////
Hello My Name Is $name

now;

echo '<br>';

echo '<ul>';
echo "<li>" . $name . "</li>";
echo "<li>" . $name . "</li>";
echo "<li>" . $name . "</li>";
echo "<li>" . $name . "</li>";
echo '</ul>';


echo '<br>';

echo <<< "navLink"
<ul>
<li>$name</li>
<li>$name</li>
<li>$name</li>
<li>$name</li>
</ul>

navLink;
