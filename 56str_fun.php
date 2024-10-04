 <?php

    echo chunk_split("Elzero Web School", 3, "@");
    echo "<br>";

    echo strlen("Elzero school");
    echo "<br>";

    echo "<pre>";
    print_r(str_split("Elzero"));
    echo "</pre>";


    echo "<pre>";
    print_r(str_split("Elzero", 2));
    echo "</pre>";

    echo "<br>";
    echo strip_tags("<h1>Hello World <br> </h1>");

    echo "<br>";
    echo ("<h1>Hello World <br> </h1>");

    echo "<br>";
    echo strip_tags("<h1> <u>Hello</u> <b>World</b> <br> </h1>","<b> <u> " );
    echo "<br>";
    echo "<br>";

    echo nl2br("Elzero\nweb\nschool",false);