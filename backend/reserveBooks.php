<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $book_id = $_POST["book_id"];
 $bookname = $_POST["bookname"];
 $src = $_POST["src"];
 $user_email = $_POST["user_email"];
 $issue_date = date("Y/m/d");

 //check book already reserved or not
 $query = "SELECT * FROM reserved WHERE user_email='$user_email' AND book_id='$book_id'";
 $result = mysqli_query($con, $query) or die(mysqli_error($con));
 if (mysqli_num_rows($result) > 0) {
  echo "found";
 } else {
  //insert query
  $query = "INSERT INTO reserved(user_email, book_id,bookname,src, date) VALUES('$user_email','$book_id','$bookname', '$src','$issue_date')";
  if (mysqli_query($con, $query) or die(mysqli_error($con))) {
   //update the book quantity
   $query = "SELECT * FROM books WHERE id=$book_id";
   $result = mysqli_query($con, $query) or die(mysqli_error($con));
   while ($row = mysqli_fetch_assoc($result)) {
    $quantity = $row["quantity"];
    $remaining_quantity = $quantity - 1;
    $query = "UPDATE books SET quantity=$remaining_quantity WHERE id='$book_id'";
    mysqli_query($con, $query) or die(mysqli_error($con));
   }
   echo "success";
  } else {
   echo "failed";
  }
 }
}
