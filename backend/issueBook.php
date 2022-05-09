<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $book_id = $_POST["book_id"];
  $user_email = $_POST["user_email"];
  $user_type = $_POST["user_type"];
  echo $user_type;

  //get the current date & convert the date into array , ["year","month","day"]
  $issue_date = explode("/", date("Y/m/d"));

  //calculate the deadline by adding 1 to the current month
  $deadline = $issue_date[0] . "/" . ($issue_date[1] + 1) . "/" . $issue_date[2];
  $issue_date = $issue_date[0] . "/" . $issue_date[1] . "/" . $issue_date[2];
 
  if($user_type == "user"){
     $query = "SELECT * FROM user WHERE email='$user_email'";
  }else{
    $query = "SELECT * FROM members WHERE email='$user_email'";
  }

  if (mysqli_num_rows(mysqli_query($con, $query)) > 0) {
    //search books and get book details
    $query = "SELECT * FROM books WHERE id=$book_id";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row["id"];
      $book_name = $row["name"];
      $rack_no = $row["rack_no"];
      $src = $row["src"];
      $quantity = $row["quantity"];

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
  } else {
    echo "User donot exists !! <script>setTimeout(() => location.assign('http://localhost/elibrary/books.php'), 2000)</script>";
  }
}
