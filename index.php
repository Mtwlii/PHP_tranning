<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>

    <h1>Recomendation Books</h1>
    <?php
    $books = [
        "Do Android app1",
        "Do Android app2",
        "Do Android app3"
    ];
    ?>

    <ul>
        <?php foreach ($books as  $book) : ?>
            <li> <?= $book; ?> </li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($books as $book) {
            # code...
            echo "<li> $book </li>";
        }

        ?>
    </ul>

</body>

</html>