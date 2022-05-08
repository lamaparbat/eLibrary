<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $book_id = $_POST["book_id"];
  $user_email = $_POST["user_email"];
  $src = $_POST["src"];
  $issue_date = explode("/", date("Y/m/d"));
  $deadline = $issue_date[0] . "/" . ($issue_date[1] + 1) . "/" . $issue_date[2];
  $issue_date = $issue_date[0] . "/" . $issue_date[1] . "/" . $issue_date[2];

  //insert query
  $query = "INSERT INTO issued(user_email, bookname, book_id, issued_date, deadline,src) VALUES('$user_email','$book_name','$book_id','$issue_date','$deadline','$src')";
  if (mysqli_query($con, $query) or die(mysqli_error($con))) {
    //update the book quantity
    $remaining_quantity = $quantity - 1;
    $query = "UPDATE books SET quantity=$remaining_quantity WHERE id='$id'";
    mysqli_query($con, $query) or die(mysqli_error($con));

    //delete from issued database
    $query = "DELETE FROM reserved WHERE user_email = '$user_email' AND book_id='$book_id'";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header("Location:http://localhost/elibrary/issued.php");
  } else {
    header("Location:http://localhost/elibrary/books.php");
  }
}
