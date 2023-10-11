<?php $username = "Metoo"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page <?= $username ?></title>
</head>

<body>

    <div> Welcome <?= $username ?></div>
    <div> <?= $username ?>You Scored 1000 Points </div>
    <div>
        <!--------- include -------->
        <?php include("score.php") ?>
    </div>
</body>

</html>