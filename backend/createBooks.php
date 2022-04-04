<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $book_name = $_POST["book_name"];
 $book_description = $_POST["book_description"];
 $book_author = $_POST["book_author"];
 $book_quantity = $_POST["book_quantity"];
 $book_rack = $_POST["book_rack"];
 $book_published = $_POST["book_published"];
 $book_category = $_POST["book_category"];
 $file_name = $_FILES["img"]["name"];
 $temp_name = $_FILES["img"]["tmp_name"];
 

 //check if user alread exist
 if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM books WHERE name='$book_name'")) > 0) {
  echo "Book already exists !!";
 } else {
  //upload image file to local folder
  move_uploaded_file($temp_name, "books_img/" . $file_name) or die(mysqli_error(($con)));

  $insert_query = "INSERT INTO books(name,description, author,quantity,rack_no, category, published, src) VALUES('$book_name','$book_description','$book_author','$book_quantity','$book_rack','$book_category','$book_published','$file_name')";
  if (mysqli_query($con, $insert_query) or die(mysqli_error($con))) {
   echo "User registered Successfully Successfully !!";
   header("Location: http://localhost/eLibrary/books.php");
  }
 }
}
