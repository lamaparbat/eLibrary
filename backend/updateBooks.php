<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $id = $_POST["data_id"];
 $book_name = $_POST["book_name"];
 $book_author = $_POST["book_author"];
 $book_category = $_POST["book_category"];
 $book_published = $_POST["book_published"];
 $file_name = $_FILES["book_img"]["name"];
 $temp_name = $_FILES["book_img"]["tmp_name"];

 if (strlen($file_name) > 0 && strlen($book_published) === 0) {
  // upload image file to local folder
  move_uploaded_file($temp_name, "books_img/" . $file_name) or die(mysqli_error(($con)));
  $query = "UPDATE books SET name='$book_name',author='$book_author',category='$book_category', src='$file_name' WHERE id=$id";
 } else if (strlen($file_name) === 0 && strlen($book_published) > 0) {
  $query = "UPDATE books SET name='$book_name',author='$book_author',category='$book_category',published='$book_published' WHERE id=$id";
 } else {
  $query = "UPDATE books SET name='$book_name',author='$book_author',category='$book_category' WHERE id=$id";
 }

 //update the books db
 if (mysqli_query($con, $query) or die(mysqli_error($con))) {
  header("Location: http://localhost/elibrary/books.php");
 } else {
  echo "no";
  header("Location: http://localhost/elibrary/books.php");
 }
}
