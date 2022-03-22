<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
 $book_name = $_POST["book_name"];
 $book_author = $_POST["book_author"];
 $book_category = $_POST["book_category"];
 $book_published = $_POST["book_published"];
 $file_name = $_FILES["book_img"]["name"];
 $temp_name = $_FILES["book_img"]["tmp_name"];

 //update the books db
 $query = "UPDATE books(name, author, category, src) VALUES('$book_name','$book_author','$book_category', '$file_name') WHERE id=$id";
}
