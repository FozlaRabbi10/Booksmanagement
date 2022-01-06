
<!DOCTYPE html>
<html>
    <head>
        <style>
            a{
                text-decoration:none;
            }
            body{
                background-color:palegreen;
            }
        </style>
    </head>
<body>

<?php
$booksjson = file_get_contents('books.json');
$books = json_decode($booksjson, true);
?>


<table style="margin-top: 50px;" border='10';>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Available</th>
        <th>Pages</th>
        <th>Isbn</th>
    </tr>

<?php foreach($books as $book): ?>
    <tr>
       <td> <?php echo ($book['id']); ?> </td>
       <td> <?php echo ($book['title']); ?> </td>
      <td>  <?php echo ($book['author']); ?> </td>
      <td>  <?php echo ($book['available']); ?> </td>
       <td> <?php echo ($book['pages']); ?> </td>
      <td>  <?php echo ($book['isbn']); ?> </td>
     </tr>   
<?php endforeach; ?>

</table>
<div style="margin-top: -100px;margin-left: 650px;">
    <button style="margin-right: 30px;height: 50px;"> <a href="info.php"> Quest</a></button> 
    <button style="margin-right: 30px;height: 50px;"><a href="del_touple.php"> Remove</a></button> 
    <button style="margin-right: 30px;height: 50px;"> <a href="insert_book.php"> Insert</a></button>
</div>

</body>
</html>
