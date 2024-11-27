<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books =[
            [
                'name' => "Do Androids Dream of Electric Sheep",
                'author' => "Philip K. Dick",
                'releaseYear' => 1968,
                'purchaseUrl' => "http://example.com"
            ],
            [
                'name' => "Project Hail Mary",
                'author' => "Andy Weir",
                'releaseYear' => 2021,
                'purchaseUrl' =>"http://example.com"
            ],
            [
                'name' => "The Martian",
                'author' => "Andy Weir",
                'releaseYear' => 2011,
                'purchaseUrl' =>"http://example.com"
            ],
        ];

        /*
        filterByAuthor = function($books, $author){
            $filteredBooks = [];

            foreach ($books As $book){
                if ($book['author'] === $author){
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        };

        $filteredBooks = $filterByAuthor($books, 'Philip K. Dick');
        */

        /*
        function filter($items, $key ,$value){
            $filteredItems = [];

            foreach ($items As $item){
                if ($item[$key] === $value){
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

        $filteredItems = filter($books, 'author', 'Philip K. Dick');
        */

        /*
        function filter($items, $fn){
            $filteredItems = [];

            foreach ($items As $item){
                if ($fn($item)){
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

        $filteredItems = filter($books, function ($book){
            return $book['releaseYear'] >= 2000;
        });
        */

        //Final Product
        $filteredItems = array_filter($books, function ($book){
            return $book['releaseYear'] >= 2000;
        });
    ?>

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