<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>

    <h1>Recomendation Books</h1>
    <?php
    $books = [
        [

            'name' => 'Do Android app1',
            'author' => 'Do Android app2',
            'purcgasUrl' => 'https://github.com/Mtwlii'
        ],
        [
            'name' => 'Do Android 1',
            'author' => 'Do Android 2',
            'purcgasUrl' => 'https://github.com/Mtwlii'

        ]
    ];
    ?>
    <?php foreach ($books as $book) : ?>
        <li>
            <a href="<?=$book['purcgasUrl'] ?>">
                <?= $book['name']; ?>
        </li>
    <?php endforeach; ?>

</body>

</html>