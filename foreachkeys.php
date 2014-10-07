<?php

//$numbers = [1, 2, 3, 4, 5];

//foreach ($numbers as $key => $value) {
//	echo ("$value has a key of {$key} and a value of {$value}\n");
//}

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $key => $book) {
	if ($book['published'] > 1950) {
    echo "Title: $key\n";
    foreach ($book as $key2 => $value) {
    echo "$key2 $value\n";
    }
	echo "------------------------\n";	
}
}