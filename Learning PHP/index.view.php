<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>
<body>
<!-- This is what we see in the page -->
<h1>Recommended Books</h1>

<ul>
    <?php foreach ($filteredItems as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
            </a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>