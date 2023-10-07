<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
    echo gettype(true);
    echo '<br>';
    echo gettype(false);
    echo '<br>';
    echo gettype("me");
    echo '<br>';
    echo gettype(123);
    echo '<br>';
    echo gettype(12.2);
    echo '<br>';
    echo gettype(70);
    echo '<br>';
    echo 10 + (int)"5.5 lesson";
    echo '<br>';
    echo 10 + (int) 15.5;
    echo '<br>';
    echo 10.5 + 10.5;
    echo '<br>';
    echo gettype(10.5 + 10.5);
    echo '<br>';
    echo  (int)(10.5 + 10.5);
    echo '<br>';
    echo gettype((int)(10.5 + 10.5));
    ?>
</body>

</html>