<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $book_id = 0;
  $issued_id = $_POST["id"];
  $bookname = $_POST["bookname"];
  $user_email = $_POST["user_email"];
  $username = "";
  $src = $_POST["src"];
  $date = date("Y/m/d");
  // echo $book_id." ". $bookname . " " . $user_email . " " .$username." ".$date." ";


  //update the book quantity
  $query = "SELECT * FROM books WHERE name='$bookname'";
  $result = mysqli_query($con, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $quantity = $row["quantity"];
    $remaining_quantity = $quantity + 1;
    $query = "UPDATE books SET quantity=$remaining_quantity WHERE name='$bookname'";
    if (mysqli_query($con, $query)) {
      //delete this data from not returned
      $query = "DELETE FROM fined_users WHERE id='$issued_id'";
      if (mysqli_query($con, $query)) {
        $query = "INSERT INTO returned(username, user_email, bookname, book_id, date,src) VALUES('$username','$user_email','$bookname','$book_id', '$date', '$src')";
        mysqli_query($con, $query);
      }
    }
    break;
  }
}
