<?php

    $id = $_GET['id'];

    $books = '';
    if (file_exists('books.json')) {
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
    } 

    else {
        $books = array();
    }

    foreach($books as $k => $book){
        if($book['id'] == $id){
            $x =1;
            break;
        }
    }
    if($x == 1){
        array_splice($books, $k, 1);
        $book_str = json_encode($books);
        file_put_contents('books.json', $book_str);
       
       echo "<script>window.location.href='index.php';</script>";
    }

    else{
        echo "ID does't found....";
    }
?>