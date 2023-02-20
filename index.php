<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
            [
                'name' => 'Do Androids Deam of Electric Sheep',
                'author' => 'Philip K. Dick',
                'purchaseUrl' => 'http://test.com',
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://test.com',
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://test.com',
            ],
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
