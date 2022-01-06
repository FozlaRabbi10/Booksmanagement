<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $books = '';
	if (file_exists('books.json')) {
       	$booksJson = file_get_contents('books.json');
		$books = json_decode($booksJson, true);
    }

     else {
        $books = array();
    }

    $bookset = array(
    	'id' => $_POST['id'],
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'pages' => $_POST['pages'],
        'available' => $_POST['available'],
        'isbn' => $_POST['isbn']
    );
    
    array_push($books, $bookset);
    $dataS = json_encode($books);
    file_put_contents('books.json', $dataS);
    header('Location: index.php');
}
?>



<!DOCTYPE html>
<html>
    <body  style="margin-left: 250px;background-color: palegreen;">
        <h3>Add book here: </h3>
        <form style="background-color: snow; margin-bottom: 60px;" action="" method="post">

        <label  for="">Id:</label>
        <input style="margin-bottom: 60px; margin-left: 65px;"  type="text" name="id" required>
        <br>
        <label  for="">Title:</label>
        <input style="margin-bottom: 60px; margin-left: 50px;" type="text" name="title" required>
        <br>
        <label  for="">Author:</label>
        <input style="margin-bottom: 60px;margin-left: 35px;" type="text" name="author" required>
        <br>
        <label  for="">Available:</label>
        <input style="margin-bottom: 60px;margin-left: 20px;" type="text" name="available" required>
        <br>
        <label for="">Pages:</label>
        <input style="margin-bottom: 60px;margin-left: 40px;" type="text" name="pages" required>
        <br>
        <label for="">ISBN:</label>
        <input style="margin-bottom: 60px;margin-left: 40px;" type="text" name="isbn" required>
        
        <input style="margin-bottom: 20px;" style="width: 200px;margin-top: 20px;" type="submit" value="Submit" required>
        </form>
    </body>
</html>
