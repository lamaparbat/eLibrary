<?php
include 'connection.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
 $book_id = $_POST["book_id"];
 $email = json_decode($_COOKIE["user_data"])[0];
 $issue_date = explode("/", date("Y/m/d"));
 $deadline = $issue_date[0] . "/" . ($issue_date[1] + 1) . "/" . $issue_date[2];
 $issue_date = $issue_date[0] . "/" . $issue_date[1] . "/" . $issue_date[2];

 //search books and get book details
 $query = "SELECT * FROM books WHERE id=$book_id";
 $result = mysqli_query($con, $query) or die(mysqli_error($con));
  while ($row = mysqli_fetch_assoc($result)) {
    $user_email = json_decode($_COOKIE["user_data"])[0];
    $book_name = $row["name"];
    $src = $row["src"];
    
    //insert query
    $query = "INSERT INTO issued(user_email, bookname, book_id, issued_date, deadline,src) VALUES('$user_email','$book_name','$book_id','$issue_date','$deadline','$src')";
    if(mysqli_query($con, $query) or die(mysqli_error($con))){
        echo "success";
    }else{
       echo "failed";
   }
  }
}
