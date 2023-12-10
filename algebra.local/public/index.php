<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Demo</title>
    </head>

<h1>Mjesto za sve projetke</h1>


<body>
    <?php
    $greeting = "test";
    echo $greeting . " " . "1";
    ?>

<?php 
    $books =[
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://expample.com',
            'releaseYear' => '1968'
        ]
    ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>

                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?>
                    <?= 'released' . ' ' . $book['releaseYear'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>    

</body>

</html>