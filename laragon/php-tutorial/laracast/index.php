 <!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php 


$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releasedYear' => 1968,
        'purchaseUrl' => 'https://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releasedYear' => 2021,
        'purchaseUrl' => 'https://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releasedYear' => 2011,
        'purchaseUrl' => 'https://example.com'
    ],
];
    function filterByAuthor($books, $author){
        $filteredBooks =[];

        foreach ($books as $book) {
            if ($book ['author']===$author){
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }

 ?>

<ul>
    <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) :?>
        <li> 
    <a href="<?= $book['purchaseUrl'] ?>">
        <?= $book['name']; ?> (<?= $book ['releasedYear'] ?>) - By <?= $book['author'] ?>
    </a>
</li>
<?php endforeach; ?>
</ul>










</body>
</html> 

