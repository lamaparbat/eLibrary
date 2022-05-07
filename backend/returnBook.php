<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $issue_id = $_POST["issue_id"];
 $book_id = $_POST["book_id"];
 $bookname = $_POST["bookname"];
 $user_email = $_POST["user_email"];
 $username = $_POST["username"];
 $src = $_POST["src"];
 $date = date("Y/m/d");
 // echo $book_id." ". $bookname . " " . $user_email . " " .$username." ".$date." ";

 $query = "INSERT INTO returned(username, user_email, bookname, book_id, date,src) VALUES('$username','$user_email','$bookname','$book_id', '$date', '$src')";

 if(mysqli_query($con, $query) or die(mysqli_error($con))){
     $query = "DELETE FROM issued WHERE id=$issue_id";
     if(mysqli_query($con, $query) or die(mysqli_error($con))){
      //update the book quantity
      $query = "SELECT * FROM books WHERE id=$book_id";
      $result = mysqli_query($con, $query) or die(mysqli_error($con));
      while ($row = mysqli_fetch_assoc($result)) {
        $quantity = $row["quantity"];
        $remaining_quantity = $quantity + 1;
        $query = "UPDATE books SET quantity=$remaining_quantity WHERE id='$book_id'";
        mysqli_query($con, $query) or die(mysqli_error($con));

      }

       echo "success";
     }else{
       echo "failed";
    }
     
 }else{
     echo "failed";
 }
}
