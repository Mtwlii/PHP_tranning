<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body style="background-color: black; color: white; font-style: italic;">
    <?php
    $name = "Dark Matter.";
    $read = true;

    if ("$read") {
        $massage = "You have read $name";
    } else {
        $massage = "You have Not read $name";
    }
    ?>
    <h1>
        <?php echo "$massage" ?>
        <br>
        <?= $massage; ?>
    </h1>

</body>

</html>